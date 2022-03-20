<?php 

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
        <a class="navbar-brand" href="index.html"> KILT </a>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbartoggler">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link"  href="index.php"
                >Stories</a
              >
            </li>
                        <li class="nav-item">
              <a class="nav-link"  href="write.php"
                >Write</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#">Log out</a>
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
		<div class="col-md-2"></div>
		<div class="col-md-8 col-md-offset-2">
			<div class="mainheading">
				<div class="row post-top-meta authorpage">
                    <div class="col-md-2 col-xs-12">
						<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal">
					</div>
					<div class="col-md-10 col-xs-12">
						<h1>Steve Mcknight</h1>
						<span class="author-description"> Founder of Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat congue condimentum. Pellentesque ut consectetur.</span>
								<a target="_blank" href="#" class="btn edit"> Edit Profile</a>				
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Author Profile Details
================================================== -->

<!-- Begin Author Posts
================================================== -->
<div class="graybg authorpage">
	<div class="container">
		<div class="listrecent listrelated">
				<!-- begin post -->
				<div class="authorpostbox">
					<div class="card">
						<a href="author.html">
						<img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">
						</a>
						<div class="card-block">
                             <span class="post-delete">
                          <a href="#" title="Delete">
                          <img src="assets/img/trash.png" alt="Delete"></a
                      ></span> <!--Add link to delete the story -->
							<h2 class="card-title"><a href="post.html"> Hello Aberdeen</a></h2>
                           
              <h4 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida tellus ut magna tempor suscipit. Nullam leo risus, sodales a eros id, ultricies blandit arcu. Duis sit amet vehicula sapien. Praesent et volutpat nunc.</h4>
                 </h4>
            	<div class="metafooter">
                    <div class="wrapfooter">
                      <span class="meta-footer-thumb">
                       <img
                            class="author-thumb"
                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                            alt="Sal"
                        />
                      </span>
                      <span class="author-meta">
                        <span class="post-name"
                          >Steve Mckinght</span
                        ><br />
                        <span class="post-date">5th March 2022</span
                        >
                      </span>
                      <span class="post-read-more"
                        ><a href="#" title="Read Story"
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

				<!-- begin post -->
		   <div class="authorpostbox">
					<div class="card">
						<a href="author.html">
						<img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">
						</a>
						<div class="card-block">
                             <span class="post-delete">
                          <a href="#" title="Delete">
                          <img src="assets/img/trash.png" alt=""></a
                      ></span> <!--Add link to delete the story -->
							<h2 class="card-title"><a href="post.html"> With Love from Edinburgh</a></h2>
                           
              <h4 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida tellus ut magna tempor suscipit. Nullam leo risus, sodales a eros id, ultricies blandit arcu. Duis sit amet vehicula sapien. Praesent et volutpat nunc.</h4>
                 </h4>
            	<div class="metafooter">
                    <div class="wrapfooter">
                      <span class="meta-footer-thumb">
                       <img
                            class="author-thumb"
                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                            alt="Sal"
                        />
                      </span>
                      <span class="author-meta">
                        <span class="post-name"
                          >Steve Mckinght</span
                        ><br />
                        <span class="post-date">5th March 2022</span
                        >
                      </span>
                      <span class="post-read-more"
                        ><a href="#" title="Read Story"
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
<!--Begin Post -->
<div class="authorpostbox">
					<div class="card">
						<a href="author.html">
						<img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">
						</a>
						<div class="card-block">
                             <span class="post-delete">
                          <a href="#" title="Delete">
                          <img src="assets/img/trash.png" alt=""></a
                      ></span> <!--Add link to delete the story -->
							<h2 class="card-title"><a href="post.html"> Restaurants to Visit in Perth</a></h2>
                           
              <h4 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida tellus ut magna tempor suscipit. Nullam leo risus, sodales a eros id, ultricies blandit arcu. Duis sit amet vehicula sapien. Praesent et volutpat nunc.</h4>
                 </h4>
            	<div class="metafooter">
                    <div class="wrapfooter">
                      <span class="meta-footer-thumb">
                       <img
                            class="author-thumb"
                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                            alt="Sal"
                        />
                      </span>
                      <span class="author-meta">
                        <span class="post-name"
                          >Steve Mcknight</span
                        ><br />
                        <span class="post-date">5th March 2022</span
                        >
                      </span>
                      <span class="post-read-more"
                        ><a href="#" title="Read Story"
                          >
                          <!--Add link to read the story in full on another page-->
                          Read More</a
                      ></span> 
                      
                      
								</div>
							</div>
						</div>
					</div>
				</div>
<!--End Post-->

<!--Begin Post-->
<div class="authorpostbox">
					<div class="card">
						<a href="author.html">
						<img class="img-fluid img-thumb" src="assets/img/demopic/8.jpg" alt="">
						</a>
						<div class="card-block">
                             <span class="post-delete">
                          <a href="#" title="Delete">
                          <img src="assets/img/trash.png" alt=""></a
                      ></span> <!--Add link to delete the story -->
							<h2 class="card-title"><a href="post.html"> Things to do in Dundee</a></h2>
                           
              <h4 class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida tellus ut magna tempor suscipit. Nullam leo risus, sodales a eros id, ultricies blandit arcu. Duis sit amet vehicula sapien. Praesent et volutpat nunc.</h4>
                 </h4>
            	<div class="metafooter">
                    <div class="wrapfooter">
                      <span class="meta-footer-thumb">
                       <img
                            class="author-thumb"
                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                            alt="Sal"
                        />
                      </span>
                      <span class="author-meta">
                        <span class="post-name"
                          >Steve Mcknight</span
                        ><br />
                        <span class="post-date">5th March 2022</span
                        >
                      </span>
                      <span class="post-read-more"
                        ><a href="#" title="Read Story"
                          >
                          <!--Add link to read the story in full on another page-->
                          Read More</a
                      ></span> 
                      
                      
								</div>
							</div>
						</div>
					</div>
				</div>
<!--End Post -->
		</div>
	</div>
</div>
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