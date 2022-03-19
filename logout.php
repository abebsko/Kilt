<?php
session_start();
unset($_SESSION["id"]);
header("location: index.php");

/*if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == "")){
    header("location: index.php");
    exit();
}
$s_id=$_SESSION['id'];*/

?>