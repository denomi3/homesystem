<?php

class Model_Login extends Model
{	
    # Функция для генерации случайной строки 
    public function generateCode($length=6)
    { 
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789"; 
        $code = ""; 
        $clen = strlen($chars) - 1;   
        while (strlen($code) < $length) { 
            $code .= $chars[mt_rand(0,$clen)];   
        } 
        return $code; 
    } 
    
    public function isAuthorized($login,$password)
    {	
        global $dbconnection;            
               
        # Вытаскиваем из БД запись, у которой логин равняеться введенному 
        //$sql = "SELECT users_id, users_password FROM `users` WHERE `users_login`='".mysql_real_escape_string($login)."' LIMIT 1";
        $sql = "SELECT user_id, user_password FROM `users` WHERE `user_login`='".$login."' LIMIT 1";
                
        if (!$get_result = $dbconnection->query($sql))
        {
            echo "Ошибка Model_Login->isAuthorized get user";
        } 
        else 
        {
            $data = array();
            $get_result->data_seek(0);
            while ($row = $get_result->fetch_assoc()) 
            {
                $data = $row;
            }
        }
                
        # Соавниваем пароли 
        if(!isset($data['user_password']))
        {
            return false;
        }
                
        $_md5 = md5(md5($password));
        if($data['user_password'] === $_md5) 
        { 
            # Генерируем случайное число и шифруем его 
            $hash = md5($this->generateCode(10)); 

            # Записываем в БД новый хеш авторизации и IP 
            if (!$upd_result = $dbconnection->query("UPDATE users SET user_hash='".$hash."' WHERE user_id='".$data['user_id']."'"))
            {
                echo "Ошибка Model_Login->isAuthorized update hash";
            } 

            # Ставим куки 
            setcookie("id", $data['user_id'], time()+60*60*24*30); 
            setcookie("hash", $hash, time()+60*60*24*30); 
            return true;
        } 
        else
        {
            return false;
        }
    }
        
    public function checkUser($id,$hash)
    {	
        global $dbconnection;     
                
        $sql = "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1";
                
        if (!$get_result = $dbconnection->query($sql))
        {
            echo "Ошибка Model_Login->checkUser get user";
            return "";
        } 
        else 
        {
            $userdata = array();
            $get_result->data_seek(0);
            while ($row = $get_result->fetch_assoc()) 
            {
                 $userdata = $row;
            }
        }
                
        if(!isset($userdata['user_login']))
        {
            return "";
        }
                
        if(($userdata['user_hash'] !== $hash) or ($userdata['user_id'] !== $id)) 
        { 
            setcookie('id', '', time() - 60*24*30*12, '/'); 
            setcookie('hash', '', time() - 60*24*30*12, '/');
            return "";
        }
        else
        {
            return $userdata['user_login'];
        }
    }
    
    public function isUserInGroup($user_id,$group)
    {	
        global $dbconnection;   
        
        $sql = "SELECT * FROM groups INNER JOIN users_groups using(user_id) "
                . "WHERE user_id = '".$user_id."' AND group_name='".$group."' LIMIT 1";
        
        if (!$get_result = $dbconnection->query($sql))
        {
            echo "Ошибка Model_Login->isUserInGroup";
            return false;
        } 
        else 
        {
            if($get_result->num_rows > 0)
            {
                return true;
            }
            return false;
        }
                
        return false;
    }
}
