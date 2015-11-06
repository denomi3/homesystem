<?php
//Базовый контроллер frontend
class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
//Базовый контроллер backend
class ControllerAdmin {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new ViewAdmin();
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo	
	}
}
