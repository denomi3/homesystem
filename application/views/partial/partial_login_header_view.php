<?php

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) 
{   
    $model = new Model_Login();
    $user_login = $model->checkUser($_COOKIE['id'], $_COOKIE['hash']);
    if(!isset($user_login))
    {       
        echo '<div class="page-header-login">';
            echo '<a href="/login" style="text-decoration: none;"><h3 class="header_style"><strong>Locked</strong></h3></a>';
            echo '<a href="/login"><img src="images/lock.png" width="20px" style="margin-left:5px;margin-top:21px;"></a>';
        echo '</div>';
    } 
    else
    {
        echo '<div class="page-header-login">';
            echo '<a href="/admin/main/index" style="text-decoration: none;"><h3 class="header_style"><strong>'.$user_login.'</strong></h3></a>';
            echo '<a href="/login/logout"><img src="images/sign-out.png" width="20px" style="margin-left:5px;margin-top:21px;"></a>';
        echo '</div>';
    }
} 
else 
{ 
    echo '<div class="page-header-login">';
        echo '<a href="/login" style="text-decoration: none;"><h3 class="header_style"><strong>Locked</strong></h3></a>';
        echo '<a href="/login"><img src="images/lock.png" width="20px" style="margin-left:5px;margin-top:21px;"></a>';
    echo '</div>';
}
?>