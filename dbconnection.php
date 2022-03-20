<?php
$servername= "localhost";
$dbname = "kilt";
$dbusername = "root";
$dbpassword= "";

//create connection 
$db = new mysqli($servername, $dbusername, $dbpassword, $dbname);
//check connection

if ($db->connect_error) {
    die ("Connection failed: ". $db->connect_error);
}
//echo "success";
?>