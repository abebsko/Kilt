<?php
include ("dbconnection.php"); //Establishing connection to database

//set variables 
$username = $_POST["username"];
$password= $_POST["password"];

if ( isset($username)||isset($password))
{ 
//run sql query 
$sql= "SELECT UserID FROM users WHERE username='$username' and password='$password'";
$result= mysqli_query($db,$sql);
$row= mysqli_fetch_array ($result);
//check result 
if (mysqli_num_rows($result)== 1)
{
    session_start();
    session_regenerate_id();
    $_SESSION['id'] = $row['UserId'];
    header("location:loginsuccess.php"); 
    session_write_close();
    exit(); 
}
else {
    echo "Incorrect username or password."; 
}  
}
?>
