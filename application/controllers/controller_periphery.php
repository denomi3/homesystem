<?php

class Controller_Periphery extends Controller
{

	function action_index()
	{	
            $this->view->generate('periphery_view.php', 'template_view.php');
	}
}