<?php

class Controller_Light extends Controller
{

	function action_index()
	{	
		$this->view->generate('light_view.php', 'template_view.php');
	}
}