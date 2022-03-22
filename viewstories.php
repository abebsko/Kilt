<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>KILT</title>
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
    <!--Icon-->
    <link rel="icon" href="https://www.flaticon.com/free-icons/power" title="power icons"/>
  
    <!-- manual styles -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navigation Begins================================================== -->
    <nav
      class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation"
    >
      <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navbartoggler"
        aria-controls="navbartoggler"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <!-- Aria-controls assists assitive technology to present content to users-->
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php"> KILT </a>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbartoggler">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link"  href="viewusers.php"
                >Users</a
              >
            </li>
            <li class="nav-item active">
              <a class="nav-link"  href="viewstories.php"
                >Posts</a
              >
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="logout.php" title= "logout"
                ><img src="assets/img/power2.png" alt="logout"></a
              >
            </li>           
          </ul>
          
        </div>
        </div>
      </div>
    </nav>
    <!--  Navigation Bar Ends-->

   <!--Users Table Begins-->
<div class="table-scroll">
<h1 align="center"> All POSTS </h1>
<div class="table-responsive">
<table class= "table table-bordered table-hover table-striped" style="table-layout:fixed">
<thead>
<tr>
<th>StoryID</th>
<th>UserID</th>
<th>Title</th>
<th>Category</th>
<th>Story Text</th>
<th>Location</th>
<th>Date Posted</th>
<th>PostImg</th>
<th>Delete Post</th>
</tr>
</thead>
<?php 
include ("dbconnection.php");
$viewposts= "SELECT * FROM stories";
$viewpostsResult= mysqli_query($db,$viewposts);
while ($row=mysqli_fetch_array($viewpostsResult)){
  $storyID= $row['storyID'];   
  $userID= $row['UserID'];
  $title= $row['title'];
  $category= $row['category'];
  $text=$row['storyText'];
  $location= $row['location']; 
  $date = $row['DatePosted'];
  $postImg = $row['postImg'];
?>
<tr>
  <td><?php echo $storyID; ?></td>
    <td><?php echo $userID; ?></td>
      <td><?php echo $title; ?></td>
  <td><?php echo $category; ?></td>
  <td><?php echo $text; ?></td>
  <td><?php echo $location; ?></td>
  <td><?php echo $date; ?></td>
  <td><img src="<?php echo $postImg; ?>" alt="post image"></td>
  <td>
    <a href="delete.php?delP=<?php echo $storyID?>">
    <button class="btn btn-danger ">
Delete
    </button>
    </a>
  </td>
</tr>
<?php }?>
</table>


</div>
</div>

      <!-- Users Table Ends================================================= --> 
    
      
      <!-- Begin Footer
	================================================== -->
      <div class="footer">
        <p class="pull-left">Copyright &copy; 2022 KILT</p>
        <div class="clearfix"></div>
      </div>
      <!-- End Footer
	================================================== -->
    </div>
    <!-- /.container -->

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
