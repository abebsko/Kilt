<?php
include ("dbconnection.php");

if(isset($_GET['del'])) {

$deleteID = $_GET['del'];
$deleteQuery = "DELETE from users WHERE UserID='$deleteID'";
$deleteQueryResult= mysqli_query($db,$deleteQuery);


if ($deleteQueryResult){
    echo "<script> window.open('viewusers.php?deleted=user has been deleted','_self') </script>"; 
    
} else {
    echo "<script> alert('Unsuccessful')</script>"; 
}
    exit();
}

elseif(isset($_GET['delP'])) { 
$deleteStory = $_GET ['delP'];
$deleteStoryQuery  = "DELETE from stories WHERE storyID='$deleteStory'";
$deleteStoryResult= mysqli_query($db,$deleteStoryQuery);
if ($deleteStoryResult){
    echo "<script> window.open('viewstories.php?deleted=post has been deleted','_self') </script>";    
}
}
elseif(isset($_GET['delU'])) { 
$deleteUStory = $_GET ['delU'];
$deleteUStoryQuery  = "DELETE from stories WHERE storyID='$deleteUStory'";
$deleteUStoryResult= mysqli_query($db,$deleteUStoryQuery);
if ($deleteUStoryResult){
    echo "<script> window.open('profile.php?deleted=post has been deleted','_self') </script>";    
}
}

//elseif(){} use to code the delete button from profile page

exit ();

?>