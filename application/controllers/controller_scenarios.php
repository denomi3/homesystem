<?php

class Controller_Scenarios extends Controller
{

	function action_index()
	{	
		$this->view->generate('scenarios_view.php', 'template_view.php');
	}
}