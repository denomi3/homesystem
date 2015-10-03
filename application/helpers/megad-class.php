<?php

class megad 
{
	public function __construct()
	{
	}
	
	public function control($id, $port, $state)
	{
            try                 
            {
		file_get_contents("http://".$id."/sec/?cmd=$port:$state");
            } 
            catch (Exception $ex)   
            {
            }
	}
	
	public function get($id, $port)
	{
            try                 
            {
                $state = file_get_contents("http://".$id."/sec/?pt=$port&cmd=get");
		return $state;
            } 
            catch (Exception $ex)
            {
                return 'OFF';
            }
		
	}
}
