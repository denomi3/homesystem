<?php

class megad 
{
	public function __construct()
	{
	}
	
	public function control($id, $port, $state)
	{
		file_get_contents("http://".$id."/sec/?cmd=$port:$state");
	}
	
	public function get($id, $port)
	{
		$state = file_get_contents("http://".$id."/sec/?pt=$port&cmd=get");
		return $state;
	}
}
?>