 
<?php
include_once("signinconnection.php");


if(isset($_POST["submit"])){
	$username = $_POST["user_name"];
	$email= $_POST["email"];
	$password = $_POST["password"];
	
  $sql = "INSERT INTO customers (username, password, email) VALUES(?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $query_result= $stmtinsert->execute([$username, $password, $email]);

	if($query_result){
    echo "registered successfully";
    header("Location: signin.php");
	}else{
    echo "error with registration ";
  }
}

?>


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
        <div class="px-1 close"> <a href="index.html">&times;</a></div>
              </div>
            <div class="form mt-3" method= "post" action= "testlogin.php">
                <label class= "input-label" for="firstname"> <b>Firstname:</b></label>
            <input class="input-box" type="text" name ="firstname" required> 
            <label class= "input-label" for="lastname"> <b>Lastname:</b></label>
            <input class="input-box" type="text" name ="lastname" required> 
            
                <label class= "input-label" for="username"> <b>Username:</b></label>
            <input class="input-box" type="text" placeholder= "Enter Email" name ="username" required> 
            <label class= "input-label"for="password"> <b>Password:</b></label>
            <input class="input-box" type="password" placeholder="Choose Password" name= "password"required>
<a href="login.php"  class="btn btn-login  my-4">Create Account</a>
                 </div>
<span class= "sup"> Already have an account? <a href="login.php">Login </a></span>
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