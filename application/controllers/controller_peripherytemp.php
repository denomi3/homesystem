<?php

class Controller_Peripherytemp extends Controller
{

        function __construct()
	{
		$this->model = new Model_Peripherytemp();
		$this->view = new View();
	}
        
	function action_index()
	{	
            $data = $this->model->get_data();	
            $this->view->generate('peripherytemp_view.php', 'template_empty.php', $data);
	}
}