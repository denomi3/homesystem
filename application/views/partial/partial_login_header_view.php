<?php

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) 
{   
    $model = new Model_Login();
    $user_login = $model->checkUser($_COOKIE['id'], $_COOKIE['hash']);
    if(!isset($user_login))
    {       
        echo '<div style="margin-top: 3.5em;text-align: right;margin-right: 10px;">';
            echo '<a href="/login" style="text-decoration: none;"><span style="color: white;font-size: 1.5em;font-family: arial;">Locked</span></a>';
            echo '<a href="/login"><img src="images/lock.png" width="16px" style="margin-left: 5px;"></a>';
        echo '</div>';
    } 
    else
    {
        echo '<div style="margin-top: 3.5em;text-align: right;margin-right: 10px;">';
            echo '<a href="/admin" style="text-decoration: none;"><span style="color: white;font-size: 1.5em;font-family: arial;">'.$user_login.'</span></a>';
            echo '<a href="/login/logout"><img src="images/sign-out.png" width="16px" style="margin-left: 5px;"></a>';
        echo '</div>';
    }
} 
else 
{ 
    echo '<div style="margin-top: 3.5em;text-align: right;margin-right: 10px;">';
        echo '<a href="/login" style="text-decoration: none;"><span style="color: white;font-size: 1.5em;font-family: arial;">Locked</span></a>';
        echo '<a href="/login"><img src="images/lock.png" width="16px" style="margin-left: 5px;"></a>';
    echo '</div>';
}
?>