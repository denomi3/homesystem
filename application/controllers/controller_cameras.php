<?php

class Controller_Cameras extends Controller
{

	function action_index()
	{	
		$this->view->generate('cameras_view.php', 'template_view.php');
	}
}