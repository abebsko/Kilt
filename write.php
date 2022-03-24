<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
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
    <!--Post Container-->
    <div class="container">
        <div class= "row justify-content-center"> 
<div class="card write-popup" id= "write">
    <div class="text-center">
        <div class="px-1 close"> <a class= "text-success"href="profile.php">&times;</a></div>
            </div>
            <div class="form mt-3">
              <form action="write.php" method="post" enctype="multipart/form-data"> 
                <label class= "input-label" for="title"> <b>Title:</b></label>
            <input type="text" name ="title" required> 
            <!-- <select class= "select-category" name="category">
           <option value="None">Select Category</option>
            <option value="Mus"> Museums & Castles</option>
            <option value="Res">Restaurants</option>
            <option value="Ent"> Entertainment</option>
          </select>-->
          <label class= "input-label" for="category"> <b>Category:</b></label>
            <input type="text" name ="category" required> 
          <label class= "input-label" for="location"> <b>Location:</b></label>
            <input type="text" name ="location" required> 
          <p class= "input-label">
            Write Something: 
           <div>
<textarea id="story" name = "story-text" rows = "10" cols = "40"></textarea>
          
           </div> </p>
           <p> <span class= "input-label"> Upload Image:</span>
 <input type="file" name="uploadfile" >
           </p>
           <p> <input type="submit" name= "post" value="POST" class="btn btn-success" />
        </p>
        </form>
                   </div>

    </div>
    </div>
     </div>
<!--Post Container Ends-->
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
//get user id so that each posts matches to user in database
$username= $_SESSION['id']; 
$viewuser = "SELECT * FROM users WHERE username= '$username' ";
$userResult= mysqli_query($db,$viewuser); 
$user= mysqli_fetch_array($userResult);
$userid= $user['UserID']; 

//run database update
if (isset($_POST ['post']))
{ //set all variables 
  $title = $_POST['title']; 
  $category= $_POST ['category']; 
  $text= $_POST ['story-text'];
  $location= $_POST['location']; 
  //file upload
  $filename= $_FILES["uploadfile"] ["name"];
  $tempname= $_FILES["uploadfile"] ["tmp_name"];
  $folder= "uploads/".$filename;

  //run sql query
  $upload = "INSERT INTO stories (title,category,storyText,location,postImg,UserID)
   VALUES ('$title','$category','$text','$location','$filename','$userid')";
   mysqli_query($db,$upload); 

//move the uploaded file into the folder and then insert into database.  
  if (move_uploaded_file($tempname,$folder)== TRUE){
     header ("Location: profile.php");  }
    else{
       echo "<script> alert (Failed to upload) </script>";
    }
} 
else {
    echo "<script> alert (Failed to upload) </script>";
    
}

?>