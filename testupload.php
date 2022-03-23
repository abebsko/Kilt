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
