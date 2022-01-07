<?php
$myServer = 'remotemysql.com';
$myUser = 'C24Sq7RwjG';
$myPass = 'ebzqFJYOkb';
$db = 'C24Sq7RwjG'; 

$con = new mysqli($myServer, $myUser, $myPass, $db) or die("Could not connect to database: ".mssql_get_last_message()); 


?>
