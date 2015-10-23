<?php

class Controller_Megad extends Controller
{

        function __construct()
	{
	}
        
	function action_index()
	{	
	}
        
        function action_getstate()
	{	
            require_once("application/helpers/megad-class.php");
            $megad = new megad();
            if ( !empty($_REQUEST['id']) AND !empty($_REQUEST['port']))
            {
                $id = $_GET['id'];
                $port = $_GET['port'];
                $state = $megad->get($id, $port);
                echo $state;
            }
	}
        
        function action_control()
	{	
            require_once("application/helpers/megad-class.php");
            $megad = new megad();
            if ( !empty($_REQUEST['id']) AND !empty($_REQUEST['port']) AND !empty($_REQUEST['state']))
            {
                $id = $_GET['id'];
                $port = $_GET['port'];
                $state = $_GET['state'];
                $megad->control($id, $port, $state);
            }
	}
}