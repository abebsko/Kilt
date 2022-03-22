<?php

include_once ("dbconnection.php"); //Establishing connection to database
session_start(); 

if ( isset($_POST["Login"]))
{ //set variables 
$username = $_POST["username"];
$password= $_POST["password"];
//run sql query 
$sql= "SELECT UserID FROM users WHERE username='$username' and password='$password'";
$result= mysqli_query($db,$sql);
$row= mysqli_fetch_array ($result, MYSQLI_ASSOC);
//check result 
if (mysqli_num_rows($result)== 1)
{
    $_SESSION['login_user'] = $row['username'];
    //$_SESSION['name'] = $row ['firstname'];
    header("location:loginsuccess.php"); 
}
else {
    echo "Incorrect username or password."; 
}  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Fonts -->
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Righteous"
      rel="stylesheet"
    />
    <!-- manual styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class= "login-page">
    <!--Login Container-->
    <div class="container">
        <div class= "row justify-content-center"> 
<div class="card col-md-4 form-popup">

    <div class="text-center">
        <div class="px-1 close "> <a class= "text-success" href="index.php">&times;</a></div>
              </div>

            <div class="form mt-3">
              <form action="login.php" method="post" id= "login"> 
                <label class= "input-label" for="username"> <b>Username:</b></label>
            <input class="input-box" type="text" placeholder= "Enter Email" name ="username" required> 
            <label class= "input-label"for="password"> <b>Password:</b></label>
            <input class="input-box" type="password" placeholder="Enter Password" name= "password"required>
<input type="submit" name="Login" value= "Login" class= "btn btn-success">

<!--Login Error Code-->
<div class="error"><?php//echo $error?> <?php//echo $username; $echo password?></div>
                 
<span class= "sup"> Don't have an account? <a href="signup.php">Sign Up </a></span>
</form>
</div>
    </div>  
    </div>
     </div>
<!--Login Container Ends-->
    <!--  JavaScript
    ================================================== -->
     <script src="assets/js/jquery.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
      integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</body>
</html>

