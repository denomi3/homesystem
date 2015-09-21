<?php

class Controller_Periphery extends Controller
{

        function __construct()
	{
		$this->model = new Model_Periphery();
		$this->view = new View();
	}
        
	function action_index()
	{	
            $data = $this->model->get_data();	
            $this->view->generate('periphery_view.php', 'template_view.php', $data);
	}
}