<?php

class Controller_Main extends ControllerAdmin
{
    function action_index()
    {	
	/*
	Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
	в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
	Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
	*/
        require_once("application/models/model_login.php");
        $this->model = new Model_Login();
            
	if ($this->model->isUserInGroup($_COOKIE['id'], "Administrators"))
	{
            $this->view->generate('main_view.php', 'template_view.php');
	}
	else
	{
            Route::ErrorPage404();
	}
    }
}
