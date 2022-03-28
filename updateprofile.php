<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
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
<body class= "write-page">
    <!--Edit Container-->
    <div class="container">
        <div class= "row justify-content-center"> 
<div class="card write-popup" id= "write">
    <div class="text-center">
        <div class="px-1 close"> <a class= "text-success"href="profile.php">&times;</a></div>
            </div>
            <div class="form mt-3">
              <form action="updateprofile.php" method="post" enctype="multipart/form-data"> 
                         <p class= "input-label">
           Describe yourself: 
           <div>
<textarea name = "desc" rows = "10" cols = "40"></textarea>
           </div> </p>
           <p> <span class= "input-label"> Change Profile Picture:</span>
 <input type="file" name="uploadfile" >
           </p>
           <p> <input type="submit" name= "update" value="UPDATE" class="btn btn-success" />
        </p>
        </form>
                   </div>

    </div>
    </div>
     </div>
<!--Edit Container Ends-->
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
//get user id
$username= $_SESSION['id']; 
$viewuser = "SELECT * FROM users WHERE username= '$username' ";
$userResult= mysqli_query($db,$viewuser); 
$user= mysqli_fetch_array($userResult);
$userid= $user['UserID']; 

//run database update
if (isset($_POST ['update']))
{ //set all variables 
   $desc= $_POST['desc']; 
  //file upload
  $filename= $_FILES["uploadfile"] ["name"];
  $tempname= $_FILES["uploadfile"] ["tmp_name"];
  $folder= "uploads/".$filename;

  //run sql query
  $upload = "UPDATE users SET description= '$desc', userpic= '$filename' WHERE UserID='$userid'";
  
  mysqli_query($db,$upload); 

//move the uploaded file into the folder and then insert into database.  
  if (move_uploaded_file($tempname,$folder)== TRUE){
     header ("Location: profile.php");  }
    else{
       echo "<script> alert (Failed to upload) </script>";
    }
} 
else {
    echo "<script> alert (Update Failed) </script>";
    
}

?>