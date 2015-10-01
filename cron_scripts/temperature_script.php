<?php
//опрос датчиков температуры
//запускается каждые 5 минут

ini_set('display_errors',1);
error_reporting(E_ALL);
$server="localhost";
$user="smarthome";
$password="smarthome";
$db="smarthome";

//require "/opt/owfs/share/php/OWNet/ownet.php";
//$ow=new OWNet("tcp://localhost:3000");

$conn = mysql_connect($server, $user, $password)
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db($db, $conn);
//$my_value = $ow->get("28.FF16FF621403/temperature");

//$my_value = file_get_contents('/mnt/1wire/28.FF16FF621403/temperature');
//$sql = "INSERT INTO temp_data(`id_dev`, `temp_value`, `temp_date`) VALUES ('28.FF16FF621403', $my_value, NOW())";
//mysql_query($sql,$conn)
//         or die('не удалось записать температуру с датчика 28.FF16FF621403');

$a = array();
$result = mysql_query("SELECT * FROM dev_keys WHERE key_type = 'temp'",$conn);
while ($row = mysql_fetch_array($result))
{
        //$id_d = $row['key_addr'];
        //$my_value = $ow->get("$id_d/temperature");
        $my_value = file_get_contents('/mnt/1wire/'.$row['key_addr'].'/temperature');
        //$sql = "INSERT INTO temp_data VALUES ("$row[key_addr]', $my_value, NOW())";
        $sql = "INSERT INTO temp_data(`id_dev`, `temp_value`, `temp_date`) VALUES ('".$row['key_addr']."',$my_value, NOW())";
        mysql_query($sql,$conn) 
            or die("не удалось записать в базу температуру с датчика ".$row['key_addr']);
}
?>
