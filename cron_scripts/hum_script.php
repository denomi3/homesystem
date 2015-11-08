<?php
//опрос датчиков влажности dht22
//запускается каждые 5 минут

ini_set('display_errors',1);
error_reporting(E_ALL);
$server="localhost";
$user="smarthome";
$password="smarthome";
$db="smarthome";

$conn = mysql_connect($server, $user, $password)
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db($db, $conn);

$a = array();
$result = mysql_query("SELECT * FROM dev_list WHERE key_type = 'hum_dht22'",$conn);
while ($row = mysql_fetch_array($result))
{
    list($dmega_id, $dmega_port) = explode(":", $row['key_addr']);
    $vals_str = file_get_contents('http://'.$dmega_id.'/sec/?pt='.$dmega_port.'&cmd=get');   
    if(!empty($vals_str))
    {
        $vals = explode("/", $vals_str);
        $hum = explode(":", $vals[1]);
        if(!empty($hum[1]))
        {                 
            $sql = "INSERT INTO temp_data(`id_dev`, `temp_value`, `temp_date`) VALUES ('".$row['key_addr']."',$hum[1], NOW())";
            mysql_query($sql,$conn) 
                or die("не удалось записать в базу значение с датчика ".$row['key_addr']);
        }
    }
}