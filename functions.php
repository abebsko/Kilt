<?php
//include ('dbconnection.php');

function getPosts (){
//global imports variable into function
global $db;
$viewpost = "SELECT * FROM posts";
$postresult= mysqli_query($db,$viewpost); 
$posts = mysqli_fetch_all($postresult, MYSQLI_ASSOC); 
return $posts;     
}


function getUser(){
global $db;
if (isset($_SESSION['id'])) {
$username= $_SESSION['id']; 
$viewuser = "SELECT * FROM users WHERE username= '$username' ";
$userResult= mysqli_query($db,$viewuser); 
$user= mysqli_fetch_array($userResult); 

return $user; 
}
}

function getUserpost($user){

    $userQuery= "SELECT * FROM posts WHERE userid";
    $userposts= mysqli_fetch_array($userResult);
}
?>