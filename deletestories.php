<?php
include ("dbconnection.php");
$deleteID = $_GET['del'];
$deleteQuery = "DELETE from users WHERE UserID='$deleteID'";
$deleteQueryResult= mysqli_query($db,$deleteQuery);


$deleteStory = $_GET ['delP'];
$deleteStoryQuery  = "DELETE from stories WHERE storyID='$deleteStory'";
$deleteStoryResult= mysqli_query($db,$deleteStoryQuery);

if ($deleteQueryResult){
    echo "<script> window.open('viewusers.php?deleted=user has been deleted','_self') </script>"; 
    
}

if($deleteStoryResult) {
echo "<script> window.open('viewstories.php?deleted=story has been deleted','_self') </script>"; 
}

?>