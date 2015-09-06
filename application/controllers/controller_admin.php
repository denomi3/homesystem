<?php

class Controller_Admin extends Controller
{
	
	function action_index()
	{
		//session_start();
		
		/*
		Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
		Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
		*/
            
		if ( $_SESSION['admin'] == "12345" )
		{
			$this->view->generate('admin_view.php', 'template_view.php');
		}
		else
		{
			Route::ErrorPage404();
		}

	}

}
