<?php

require_once 'dbconfig.php';

setlocale(LC_ALL, 'ru_RU.utf8');
date_default_timezone_set('Europe/Moscow');

if ( empty($dbconnection) )
{   
	$dbconnection=new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

        if ($dbconnection->connect_error)
        {
            die('Подключение к серверу MySQL невозможно(Код ошибки: '.$dbconnection->connect_errno.'): '.$dbconnection->connect_error);
        }
} 
