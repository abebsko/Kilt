<?php 

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
              <form action="" method="post"> 
                <label class= "input-label" for="postTitle"> <b>Title:</b></label>
            <input type="text" name ="title" required> 
             <label class= "input-label" for="postTitle"> <b>Category:</b></label>
            <select class= "select-category">
           <option value="None">Select Category</option>
            <option value="Mus"> Museums & Castles</option>
            <option value="Res">Restaurants</option>
            <option value="Ent"> Entertainment</option>
          </select>
          <label class= "input-label" for="postTitle"> <b>Location:</b></label>
            <input type="text" name ="Location" required> 
          <p class= "input-label">
            Write Something: 
           <div>
<textarea id="story" name = "story" rows = "10" cols = "40"></textarea>
          
           </div> </p>
           <p> <span class= "input-label"> Upload Image:</span>
 <input type="file" id="postImg" name="postImg">
           </p>
           <p> <input type="submit" value="POST" class="btn btn-success" />
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