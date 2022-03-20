<?php session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
            <div class="form mt-3">
              <form action="adminlogin.php" method="post" id= "adminLogin" > 
                <label class= "input-label" for="adminName"> <b>Administrator Name:</b></label>
            <input class="input-box" type="text" name="adminName" required> 
            <label class= "input-label"for="adminPass"> <b>Password:</b></label>
            <input class="input-box" type="password" placeholder="Enter Password" name= "adminPass" required>
<input type="submit" name= "adminLogin" value= "Login" class= "btn btn-success">
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

<?php
include_once ("dbconnection.php");

if (isset($_POST['adminLogin']))
{   
  //set variables 
$adminName = $_POST['adminName'];
$adminPass = $_POST['adminPass'];

//run sql query 
$adminsql= "SELECT adminID FROM admin WHERE adminName='$adminName' AND adminPass='$adminPass'";
$adminresult= mysqli_query($db,$adminsql);

//check result 
if (mysqli_num_rows($adminresult) == 1)
{
       header("location:adminpage.php");  
}
else {
    echo "<script> alert(Incorrect Administrator Name or password.) </script> "; 
} 
} 

?>