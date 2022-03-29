 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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
    <!--Sign up Container-->
    <div class="container">
        <div class= "row justify-content-center"> 
<div class="card col-md-4 form-popup" id= "login">
    <div class="text-center">
        <div class="px-1 close"> <a href="index.php">&times;</a></div>
              </div>
            <div class="form mt-3">
              <form action="signup.php" method= "post">      
                <label class= "input-label" for="firstname"> <b>*Firstname:</b></label>
            <input class="input-box" type="text" name ="firstname" required> 
            <label class= "input-label" for="surname"> <b>*Lastname:</b></label>
            <input class="input-box" type="text" name ="surname" required> 
            
                <label class= "input-label" for="username"> <b>*Username:</b></label>
            <input class="input-box" type="text" placeholder= "Enter Email" name ="username" required> 
            <label class= "input-label"for="password"> <b>*Password:</b></label>
            <input class="input-box" type="password" placeholder="Choose Password" name= "password" required>
<input type="submit" value= "Create Account" name=submit class= "btn btn-success">
                 </div>
<span class= "sup"> Already have an account? <a href="login.php">Login </a></span>
     </form>
    </div>  
    </div>
     </div>
<!--Container Ends-->
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

<?php
include_once("dbconnection.php");

 
if ( isset($_POST ["submit"]))
{
$firstname = $_POST ["firstname"];
  $surname = $_POST ["surname"];
	$username = $_POST["username"];
	$password = $_POST["password"];
  //check if user is already registered.  
  $checkemail = "SELECT userID FROM users WHERE username= '$username' and password ='$password'";
  $checkemailresult = mysqli_query($db,$checkemail);
  if(mysqli_num_rows($checkemailresult)> 0) {
    echo "<script> alert('$username already exists') </script>";
    exit();
  }

	//insert new user into database 
  $insertuser = "INSERT INTO users (username, password, firstname, surname) VALUES('$username','$password','$firstname','$surname')";
	if(mysqli_query($db,$insertuser)) {
        header ("Location: login.php");}
  else{
    echo "<script> alert (Failed to Register New User) </script>";
  }
}
?>