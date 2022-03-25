<?php 
 include_once ("dbconnection.php");
 require_once ("functions.php");
$posts= getPosts();
$categories= getCategory();
$location = getLocation();
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
        <a class="navbar-brand" href="index.php"> KILT </a>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbartoggler">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link"  href="index.php"
                >Stories</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="login.php">Login</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link"  href="profile.php"
                >Profile</a
              >
            </li>-->
          </ul>
          
        </div>
        </div>
      </div>
    </nav>
    <!--  Navigation Bar Ends-->

    <!-- Tagline Begins
================================================== -->
    <div class="container">
      <div class="mainheading">
        <h3 class="sitetitle"> Discover Scotland. </h3>
        <p class="lead">  Read Exciting and Thrilling Stories lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nunc, elementum in ipsum ac.
        </p>
      </div>
      <!-- End TagLine================================================= -->
<!--Filter -->

<div class="container">
  <div class="row filter">
    
    <h6 class="filter-title font-weight-bold"> FILTER BY: </h6>
<?php foreach($categories as $category): ?>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="CategoriesMenuButton" data-toggle="dropdown" >
    Category
  </button>
  <div class="dropdown-menu" >
    <a class="dropdown-item" href="#">Musuems & Castles</a>
    <a class="dropdown-item" href="#">Restaurants</a>
    <a class="dropdown-item" href="#">Entertainment</a>
  </div>
</div>
<?php endforeach ?>
<div class="dropdown"> 
  <button class="btn btn-secondary dropdown-toggle" type="button" id="LocationMenuButton" data-target="LocationMenuButton" data-toggle="dropdown">
    Location
  </button>
  <div class="dropdown-menu LocationMenuButton" >
    <a class="dropdown-item" href="#">Aberdeen</a>
    <a class="dropdown-item" href="#">Perth</a>
    <a class="dropdown-item" href="#">Dundee</a>
    </div>
  </div>
  
</div>
</div>
<!--Filter Ends-->
      <!-- Begin Stories ================================================= --> 
     <!-- Begin Author Posts
================================================== -->
 <?php foreach ($posts as $post):?>                         
<div class="graybg authorpage">
	<div class="container">
		<div class="listrecent listrelated">
				<!-- begin post -->
				<div class="authorpostbox">
        <div class="card">
          
					<img class="img-fluid img-thumb" src="<?php echo 'uploads/'. $post['postImg']; ?>" alt="post image">
					<div class="card-block">

							<h2 class="card-title"><a href="post.php"> <?php echo $post ['title']?></a></h2>
                           
              <h4 class="card-text"> <?php echo $post ['storyText'] ?></h4>
                 </h4>
            	<div class="metafooter">
                    <div class="wrapfooter">
                      <span class="meta-footer-thumb">
                       <img
                            class="author-thumb"
                            src="<?php echo 'uploads/'. $post['userpic']; ?>" alt="profile image"
                        />
                      </span>
                      <span class="author-meta">
                        <span class="post-name"
                          ><?php echo $post ['firstname']." ". $post ['surname']?></span
                        ><br />
                        <span class="post-date"><?php echo date("F j, Y", strtotime($post ['date_posted'])); ?></span
                        >
                      </span>
                      <span class="post-read-more"
                        ><a href="post.php?story=$post['storyID']" title="Read Story"
                          >
                          <!--Add link to read the story in full on another page-->
                          Read More</a
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
      
<!-- End Stories================================================== -->    

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
