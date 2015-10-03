<?
require_once("megad_class.php");
$megad = new megad();

if ( !empty($_REQUEST['get_state']) )
{
	//$state = $megad->get(_GET['id'], _GET['get_state']);
        echo 'ON';//$state;
}
/*elseif ( !empty($_REQUEST['get_all']) )
{
	$state_all = "";
	for ( $i = 0; $i < 14; $i++ )
	{
		$state = $megad->get($_GET['id'], $i);
		if ( preg_match("/^ON/", $state) )
		$state_all .= "on;";
		else
		$state_all .= "off;";
	}
	$state_all .= $megad->get($_GET['id'], 14).";";
	$state_all .= $megad->get($_GET['id'], 15).";";

	$state_all .= $_GET['id'];

	echo $state_all;

}
else
{
	if ( $_REQUEST['state'] == "true" )
	$state = 1;
	else
	$state = 0;
	$megad->control($_REQUEST['id'], $_REQUEST['port'], $state);
}*/
?>