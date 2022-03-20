<?php
session_start ();

if(!$_SESSION["id"]) {
    echo "Session not Set";
}

else {
session_destroy();
header("location: index.php");
}




?>