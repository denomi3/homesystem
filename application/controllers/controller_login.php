<?php

class Controller_Login extends Controller
{
        function __construct()
	{
                $this->view = new View();
	}
	
	function action_index()
	{
                $this->model = new Model_Login();
		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];
			$isAuth = $this->model->isAuthorized($login, $password);
			/*
			Производим аутентификацию, сравнивая полученные значения со значениями прописанными в коде.
			Такое решение не верно с точки зрения безопсаности и сделано для упрощения примера.
			Логин и пароль должны храниться в БД, причем пароль должен быть захеширован.
			*/
			if($isAuth==true)
			{
				$data["login_status"] = "access_granted";
				header('Location:/');
			}
			else
			{
				$data["login_status"] = "access_denied";
			}
		}
		else
		{
			$data["login_status"] = "";
		}
		
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
        
        function action_logout()
	{
            setcookie('id', '', time() - 60*60*24*30, '/'); 
            setcookie('hash', '', time() - 60*60*24*30, '/');
            header('Location: /'); exit(); 
	}
        
	
}
