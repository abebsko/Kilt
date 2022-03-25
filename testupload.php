<?php
include ("dbconnection.php");

if (isset($_POST['upload'])) { 
    $filename= $_FILES["uploadfile"] ["name"];
    $tempname= $_FILES["uploadfile"] ["tmp_name"];
    $folder= "uploads/".$filename;

$upload = "INSERT INTO images (filename) VALUES ('$filename')";

mysqli_query($db,$upload);
//move the uploaded file into the folder
if(move_uploaded_file($tempname,$folder)) {
echo "Image uploaded successfully";
} 
else {
    echo "Failed to upload image";
}
}

else {
    echo "Failed"; 
}

//retrieve image from database
$run = "SELECT * FROM images"; 
$result = mysqli_query($db,$run); 
while ($data= mysqli_fetch_array($result)){
    ?>
    <img src="<?php echo $data['filename']; ?>" alt="image"> 
    <?php
}
?>

//most recent version
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
  $filename= $_FILES['uploadfile'] ['name'];
  $tempname= $_FILES['uploadfile'] ['tmp_name'];
  $folder= "uploads/".$filename;

  //run sql query
  $upload = "INSERT INTO stories (title,category,storyText,location,postImg,UserID)
   VALUES ('$title','$category','$text','$location','$filename','$userid')";
   mysqli_query($db,$upload); 

//move the uploaded file into the folder and then insert into database.  
  if (move_uploaded_file($tempname,$folder)){
     header ("Location: profile.php");  }
    else{
       echo "<script> alert (Failed to upload) </script>";
    }
} 
else {
    echo "<script> alert (Failed to upload) </script>";
    
}

?>


<?php
include_once("dbconnection.php");
//get user id so that each posts matches to user in database
if (isset($_SESSION['id'])) {
$username= $_SESSION['id']; 
$viewuser = "SELECT * FROM users WHERE username= '$username' ";
$userResult= mysqli_query($db,$viewuser); 
$user= mysqli_fetch_array($userResult);
$userid= $user['UserID']; 

if ( isset($_POST ["post"]))
{ //set all variables 
  $title = $_POST['title']; 
  $category= $_POST ['category']; 
  $text= $_POST ['story-text'];
  $location= $_POST['location']; 
  //file upload
  $filename= $_FILES['image'] ["name"];
  $tempname= $_FILES['image'] ["tmp_name"];
  $folder= "uploads/".$filename;
}
//move the uploaded file into the folder and then insert into database.  
if(move_uploaded_file($tempname,$folder)) {
   $write = "INSERT INTO stories (title,category,storyText,location,postImg,UserID)
   VALUES ('$title','$category','$text','$location','$filename','$userid')";
   mysqli_query($db,$write); 
echo "<script> alert (upload successful) </script>";
header ("Location: profile.php"); 
} 
else {
    echo "<script> alert (Failed to upload) </script>";
    header ("location:profile.php");
}

}
?>
<?php
include_once("dbconnection.php");
//check who user is 
if (isset($_SESSION['id'])) {
$username= $_SESSION['id']; 
$viewuser = "SELECT * FROM users WHERE username= '$username' ";
$userResult= mysqli_query($db,$viewuser); 
}
//get user id so that each posts matches to user in database
while ($user= mysqli_fetch_array($userResult)) {
$userid= $user['UserID'];

if ( isset($_POST ["post"]))
{ //set all variables 
  $title = $_POST['title']; 
  $category= $_POST ['category']; 
  $text= $_POST ['story-text'];
  $location= $_POST['location']; 
  //file upload
  $filename= $_FILES['image'] ["name"];
  $tempname= $_FILES['image'] ["tmp_name"];
  $folder= "uploads/".$filename;

//move the uploaded file into the folder and then insert into database.  
if(move_uploaded_file($tempname,$folder)) {
   $write = "INSERT INTO stories (title,category,storyText,location,postImg,UserID)
   VALUES ('$title','$category','$text','$location','$filename','$userid')";
   mysqli_query($db,$write);
 echo "<script> alert (upload successful) </script>";
 header ("Location: profile.php"); 
}
else {
    echo "<script> alert (Failed to upload) </script>";
    header ("location:profile.php");
}

}
}
  
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test</title>
  </head>
  <body>
    <main>
      <form
        action="testupload.php"
        method="post"
        enctype="multipart/form-data"
        
      >
        <input type="file" name="uploadfile" />
        <div>
          <input type="submit" name="upload" value="Upload" />
        </div>
      </form>
    </main>
  </body>
</html>
