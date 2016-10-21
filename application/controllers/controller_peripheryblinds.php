<?php

class Controller_Peripheryblinds extends Controller
{

        function __construct()
	{
		$this->model = new Model_Peripheryblinds();
		$this->view = new View();
	}
        
	function action_index()
	{	
            $data = $this->model->get_data();	
            $this->view->generate('peripheryblinds_view.php', 'template_empty.php' ,$data);
	}
}