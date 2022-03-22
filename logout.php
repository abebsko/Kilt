<?php
session_start ();
//Delete Session variable
unset ($_SESSION['id']);
//Destroy session
session_destroy();
header("location: index.php");
exit (); 

?>