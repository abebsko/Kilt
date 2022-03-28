<?php session_start();
include_once ("dbconnection.php");
require_once ("functions.php");
$Uposts= getUserPosts();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Profile</title>
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
    <link rel="icon" href="https://www.flaticon.com/free-icons/delete" title="delete icons"/>
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
            <li class="nav-item active">
              <a class="nav-link"  href="loginsuccess.php"
                >Stories</a>
            </li>
                        <li class="nav-item">
              <a class="nav-link"  href="write.php"
                >Write</a
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

 <!-- Begin Author Profile Details
================================================== -->

<div class="container">
	<div class="row">
			<div class="col-md-8 col-md-offset-2">
      <?php
include_once ('dbconnection.php');
if (isset($_SESSION['id'])) {
$username= $_SESSION['id']; 
$viewuser = "SELECT * FROM users WHERE username= '$username' ";
$userResult= mysqli_query($db,$viewuser); 

while ($user= mysqli_fetch_array($userResult)) {
$firstname=$user['firstname'];
$surname = $user ['surname']; 


?> 
			<div class="mainheading">
				<div class="row post-top-meta authorpage">
                    <div class="col-md-2 col-xs-12">
						<img class="author-thumb" src="<?php echo 'uploads/'. $user['userpic']; ?>" alt="profile image">
					</div>
					<div class="col-md-10 col-xs-12">
            <?php echo "<h1> {$firstname} {$surname}</h1>";?>
									<span class="author-description">  <?php echo $user ['description'];?></span>
								<a target="_blank" href="updateprofile.php" class="btn edit"> Edit Profile</a>
			
				</div>
			</div>
      <?php } } ?>
		</div>
	</div>
</div> 

<!-- End Author Profile Details
================================================== -->

<!-- Begin Author Posts
================================================== -->
<?php 

foreach ($Uposts as $Upost):?>
<div class="graybg authorpage">
	<div class="container">
		<div class="listrecent listrelated">
				<!-- begin post -->
				<div class="authorpostbox">
					<div class="card">
						<a href="author.html">
						<img class="img-fluid img-thumb" src="<?php echo 'uploads/'. $Upost['postImg']; ?>" alt="">
						</a>
						<div class="card-block">
                             <span class="post-delete">
                          <a href="delete.php?delU=<?php echo $Upost['storyID']?>" title="Delete">
                          <img src="assets/img/trash.png" alt="Delete"></a
                      ></span> <!--Add link to delete the story -->
							<h2 class="card-title"><a href="post.php?story=<?php echo $Upost['storyID']?>"><?php echo $Upost ['title']?></a></h2>
                           
              <h4 class="card-text"> <?php echo $Upost ['storyText']?></h4>
                          	<div class="metafooter">
                    <div class="wrapfooter">
                      <span class="meta-footer-thumb">
                       <img
                            class="author-thumb"
                            src="<?php echo 'uploads/'. $Upost['userpic']; ?>" alt="profile image"
                        />
                      </span>
                      <span class="author-meta">
                        <span class="post-name"
                          ><?php echo $Upost ['firstname']." ". $Upost ['surname']?></span
                        ><br />
                        <span class="post-date"><?php echo date("F j, Y", strtotime($Upost ['date_posted'])); ?></span
                        >
                      </span>
                      <span class="post-read-more"
                        ><a href="loggedinpost.php?story=<?php echo $Upost['storyID']?>" title="Read Story"
                          >Read More</a
                      ></span> 
                      
              </div>
							</div>
						</div>
					</div>
				</div>
				<!-- end post -->
		</div>
	</div>
</div>
<?php endforeach ?>
<!-- End Author Posts
================================================== -->


      

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
