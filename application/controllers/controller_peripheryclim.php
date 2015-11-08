<?php

class Controller_Peripheryclim extends Controller
{

        function __construct()
	{
		$this->model = new Model_Peripheryclim();
		$this->view = new View();
	}
        
	function action_index()
	{	
            $data = $this->model->get_data();	
            $this->view->generate('peripheryclim_view.php', 'template_empty.php', $data);
	}
}