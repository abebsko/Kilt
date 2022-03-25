<?php session_start ();
 include_once ("dbconnection.php"); 
?>

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
        <a class="navbar-brand" href="loginsuccess.php"> KILT </a>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbartoggler">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link"  href="loginsuccess.php"
                >Stories</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="profile.php"
                >Profile</a
              >
            </li>
            
          </ul>
          
        </div>
        </div>
      </div>
    </nav>
    <!--  Navigation Bar Ends-->

   <!-- Begin Article
================================================== -->
<div class="container">
	<div class="row">
		<!-- Begin Post -->
		<div class="col-md-8 col-md-offset-2 ">
			<div class="mainheading">
				<!-- Begin Author Details -->
        <?php 
 if (isset($_GET['story'])) {     
$storyid = $_GET['story']; 
$getstory = "SELECT * FROM posts WHERE storyID= '$storyid'";  
$getstoryResult = mysqli_query($db,$getstory);

while ($story=(mysqli_fetch_array($getstoryResult))){
 
?>
				<div class="row post-top-meta">
					<div class="col-md-2">
						<img class="author-thumb" src="<?php echo 'uploads/'. $story['userpic']; ?>" alt="Profile Image">
					</div>
					<div class="col-md-10">
						<span class="author-meta">
                        <span class="post-name"
                          > <h1> <?php echo $story ['firstname']." ". $story ['surname']?></h1></span
                        ><br />
                        <span class="post-date"><?php echo date("F j, Y", strtotime($story ['date_posted'])); ?></span
                        >
                      </span>
						</div>
				</div>
				<!-- End Author Details-->

				<h3 class="post-title"> <?php echo $story ['title'] ?></h3>

			</div>

			<!-- Begin Featured Image -->
			<img class="featured-image img-fluid" src="<?php echo 'uploads/'. $story['postImg']; ?>" alt="post image">
			<!-- End Featured Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<p>
				<?php echo $story ['storyText'] ?></p>
				<p>
				
			</div>
			<!-- End Post Content -->

			<!-- Begin Tags -->
			<div class="after-post-tags">
				<ul class="tags">
					<li><a href="#"><?php echo $story['category']; ?></a></li>
					<li><a href="#"><?php echo $story['location']; ?></a></li>
	
				</ul>
			</div>
			<!-- End Tags -->
<?php } }  ?>
		</div>
		<!-- End Post -->

	</div>
</div>
<!-- End Article
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
