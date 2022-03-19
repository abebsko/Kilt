<?php
$servername= "localhost";
$dbname = "kilt";
$username = "root";
$password= "";

//create connection 
$db = new mysqli($servername, $username, $password, $dbname);
//check connection

if ($db->connect_error) {
    die ("Connection failed: ". $db->connect_error);
}
//echo "success";
?>