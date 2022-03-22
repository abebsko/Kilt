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

else { 
if(isset($_GET['delP'])) {
$deleteStory = $_GET ['delP'];
$deleteStoryQuery  = "DELETE from stories WHERE storyID='$deleteStory'";
$deleteStoryResult= mysqli_query($db,$deleteStoryQuery);
if ($deleteStoryResult){
    echo "<script> window.open('viewstories.php?deleted=post has been deleted','_self') </script>"; 
    
}
}
exit ();
}
?>