<?php

class Controller_Peripherylight extends Controller
{

        function __construct()
	{
		$this->model = new Model_Peripherylight();
		$this->view = new View();
	}
        
	function action_index()
	{	
            $data = $this->model->get_data();	
            $this->view->generate('peripherylight_view.php', 'template_empty.php' ,$data);
	}
}