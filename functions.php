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

/* Can this be broken into two functions? */
function getUserposts(){
global $db;
if (isset($_SESSION['id'])) {
$username= $_SESSION['id']; 
$viewuser = "SELECT * FROM users WHERE username= '$username' ";
$userResult= mysqli_query($db,$viewuser); }
 
while ($user= mysqli_fetch_array($userResult)) {
$userid= $user['UserID'];
$userQuery= " SELECT * FROM posts WHERE Userid= '$userid'";
$userQueryResult= mysqli_query($db,$userQuery);
$userposts= mysqli_fetch_all($userQueryResult,MYSQLI_ASSOC);
return $userposts; 
}

}
    
function getCategory(){
    global $db; 
    $categoryQuery= "SELECT category FROM posts";
    $categoryresult= msqli_query($db,$categoryQuery);
    $categories= mysqli_fetch_array($categoryresult);
    return $categories;
}

function getLocation(){
    global $db; 
    $locationQuery= "SELECT location FROM posts";
    $locationresult= msqli_query($db,$locationQuery);
    $locations= mysqli_fetch_array($locationresult);
    return $locations;
}

?>