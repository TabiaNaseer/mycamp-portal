<?php
require('include/db.php');
$query = "SELECT * FROM about1,department";
$run = mysqli_query($db,$query);
$user_data=mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="MyCamp : Pharmacy Deoartment" />
	
	<!-- OG -->
	<meta property="og:title" content="MyCamp : Pharmacy Deoartment" />
	<meta property="og:description" content="MyCamp : Pharmacy Deoartment" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/logofi.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logofi.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>MyCamp</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav">
		
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<img src="assets/images/logo1.png" alt="">
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a target="_blank" href="https://www.facebook.com/Faculty-of-Pharmacy-Jinnah-University-for-Women-106881517818844" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/in/faculty-of-pharmacy-jinnah-university-for-women-579785220" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<img src="assets/images/logo1.png" alt="">
						</div>
                        <ul class="nav navbar-nav">	
							<li><a href="mycamp.php">Home</a>
							</li>
							<li><a href="projects.php">Projects</a>
							</li>
							<li class="add-mega-menu"><a href="javascript:;">Programs <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li class="add-menu-left">
										<h5 class="menu-adv-title">Our Courses</h5>
										
											<li><a href="courses.html">PharmD Program<i class="fa fa-angle-right"></i></a>
												<ul class="sub-menu">
											<li><a href="courses-details.php"> First Professional PharmD</a></li>
											<li><a href="sp_course_detail.php"> Second Professional PharmD</a></li>
											<li><a href="tp_course_detail.php"> Third Professional PharmD</a></li>
											<li><a href="fp_course_detail.php"> Fourth Professional PharmD</a></li>
											<li><a href="fip_course_detail.php"> Fifth Professional PharmD</a></li>
										</ul>

											</li>
											<li><a href="Mphil_courses.php">Mphil Program<i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
											<li><a href="pc_courses.php">  Pharmacognosy Curriculum </a></li>
											<li><a href="pc2_courses.php"> Pharmacology Curriculum</a></li>
											<li><a href="pc3_courses.php"> Pharmaceutics Curriculum </a></li>
											<li><a href="pc4_courses.php"> Pharmaceutical Chemistry Curriculum </a></li>
											<li><a href="pc5_courses.php"> Pharmacy Practice Curriculum </a></li>
										</ul>
										</li>
											<li><a href="phd_courses.html">Phd Program<i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
											<li><a href="phd1_courses.php">Pharmacognosy Curriculum </a></li>
											<li><a href="phd2_courses.php"> Pharmacology Curriculum</a></li>
											<li><a href="phd3_courses.php"> Pharmaceutics Curriculum </a></li>
											<li><a href="phd4_courses.php"> Pharmaceutical Chemistry Curriculum </a></li>
											<li><a href="phd5_courses.php"> Pharmacy Practice Curriculum </a></li>
										</ul>
										</li>
								
									</li>
									
								</ul>
							</li>
							<li><a href="blog-classic-grid.php">Research</a>
							</li>
							<li><a href="profile.php">Faculty</a>
							</li>
							<li><a href="javascript:;">Activities <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									
									<li><a href="event.php">Event</a></li>
									<li><a href="achivement.php">Achievements</a></li>
									<li><a href="participation.php">Participation</a></li>
									<li><a href="communityservice.php">Community Service</a></li>
									<li><a href="conference.php">Conferences</a></li>
								</ul>
							</li>
							
							
							<li><a href="about-1.php">About Us</a>
										
									</li>
							<li><a href="contact-1.php">Contact Us</a>
										
									</li>
						</ul>
						
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Inner Content Box ==== -->
    <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/event/6pic.jfif);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">About Us</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="mycamp.php">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
		<div class="content-block">
            <!-- About Us ==== 
			<div class="section-area section-sp1">
                <div class="container">

					 <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon1.png" alt=""/></a> 
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Our Philosophy</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon2.png" alt=""/></a> 
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Kingster's Principle</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon3.png" alt=""/></a> 
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Key Of Success</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="feature-container">
								<div class="feature-md text-white m-b20">
									<a href="#" class="icon-cell"><img src="assets/images/icon/icon4.png" alt=""/></a> 
								</div>
								<div class="icon-content">
									<h5 class="ttr-tilte">Our Philosophy</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
            </div>
            ---->
			<!-- About Us END ==== -->
            <!-- Our Story ==== -->
			<div class="section-area bg-gray section-sp1 our-story">
				<div class="container">
					<div class="row align-items-center d-flex">
						<div class="col-lg-5 col-md-12 heading-bx">
							<h2 class="m-b10">Our Vision</h2>
							
							<p><?=$user_data['desc1']?></p>
							<br>
							<br>
							<h2 class="m-b10">Our Departments</h2>
							 <?php
                

                  $query="SELECT * FROM department";
                  $query_run=mysqli_query($db,$query);
                  while($department=mysqli_fetch_array($query_run)){
  ?>
							<p style="height:0px ;">-&nbsp;<?=$department['departmentname']?></p>

							<?php
}
                    ?>
						</div>
						<div class="col-lg-7 col-md-12 heading-bx p-lr">
							<div class="video-bx">
								 <img src="assets/images/about/<?=$user_data['about_pic']?>">
								
							</div>
						</div>
					</div>

						
							
						
						
					
				</div>
				
			</div>
			<div class="section-area section-sp2">
				
			</div>
			<!-- Our Story END ==== -->
			<!-- About Content ==== -->
			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(assets/images/event/pic10.jpg);">
                <div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="join-content-bx text-white">
								<h2>Our Mission</h2>
								
								<p><?=$user_data['desc2']?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Content END ==== -->
			<!-- Testimonials ==== -->
			<div class="section-area section-sp2">
				
			</div>
			<!-- Testimonials END ==== -->
		</div>
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Inner Content Box END ==== -->
    <!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<img src="assets/images/logo.png" alt=""/>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a target="_blank" href="https://www.facebook.com/Faculty-of-Pharmacy-Jinnah-University-for-Women-106881517818844" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/in/faculty-of-pharmacy-jinnah-university-for-women-579785220" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">MyCamp</h5>
							<p class=" m-b20">Our students competes the contemporary challenges along with serving the customary roles of pharmacist to promote and protect the health care system by appropriate utilization of the key tools as education communication, licensing, regulation and enforcement provideto them.</p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
									<div class="ajax-message"></div>
									
								</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Categories</h5>
									<ul>
										<li><a href="mycamp.php">Home</a></li>
										<li><a href="about-1.php">About</a></li>
										<li><a href="event.php">Event</a></li>
										<li><a href="contact-1.php">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Programs</h5>
									<ul>
										<li><a href="courses.html">PharmD Program</a></li>
										<li><a href="Mphil_courses.php">Mphil Program</a></li>
										<li><a href="phd_courses.html">PhD Program</a></li>
										
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a >Email: info@juw.edu.pk</a></li>
										<li><a >Phone: +92(021)36620614 EXT (214)</a></li>
										
									</ul>
								</div>
							</div>
						</div>
                    </div>
					<!----<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
								<li><a href="assets/images/event/pic9.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px" src="assets/images/event/pic9.jpg" alt=""></a></li>
								<li><a href="assets/images/event/pic10.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px"src="assets/images/event/pic10.jpg" alt=""></a></li>
								<li><a href="assets/images/event/pic11.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px"src="assets/images/event/pic11.jpg" alt=""></a></li>
								<li><a href="assets/images/event/pic12.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px"src="assets/images/event/pic12.jpg" alt=""></a></li>
								<li><a href="assets/images/event/pic13.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px"src="assets/images/event/pic13.jpg" alt=""></a></li>
								<li><a href="assets/images/event/pic14.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px"src="assets/images/event/pic14.jpg" alt=""></a></li>
								<li><a href="assets/images/event/1234.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px"src="assets/images/event/1234.jpg" alt=""></a></li>
								<li><a href="assets/images/event/pic9.jpg" class="magnific-anchor"><img style="width: 100px; height: 50px" src="assets/images/event/pic9.jpg" alt=""></a></li>
							</ul>
                        </div>
                    </div>
------>



                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
</body>


</html>
