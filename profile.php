<?php
require('include/db.php');
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
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/event/10pic.jfif);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Faculty</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="index.html">Home</a></li>
					<li>Faculty</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
				<style >
					@media screen and (max-width: 500px) {
										  .square {
										    width: 325px;
										  }
										}
					@media screen and (max-width: 700px) {
										  .square {
										    width: 400px;
										  }
										}
				 @media screen and (max-width: 600px) {
										  .square {
										    width: 300px;
										  }
										}
				@media screen and (max-width: 400px) {
										  .square {
										    width: 230px;
										  }
										}
			 
				</style>
	             <div class="container square">
					 <div class="row">
						
						<div class="col-lg-9 col-md-8 col-sm-12 m-b30">
							<div class="profile-content-bx">
								<div class="tab-content">
								





									<div class="tab-pane active " id="accordion1">
										<div class="profile-head "><a data-toggle="collapse" href="#faq1" class="collapsed acod-title" data-parent="#faq1">
											<i><h3>Department of Pharmaceutical-Chemistry </h3></i></a>
											&nbsp;&nbsp;<a data-toggle="collapse" href="#faq1" class="collapsed acod-title fa fa-sort-down" data-parent="#faq1"></a>
											
										</div>
										<div class="courses-filter">
											<div class="clearfix acod-body collapse content " id="faq1">
												<ul  class="ttr-gallery-listing magnific-image row">
													
													<?php
													

$query1 = "SELECT * FROM faculty ORDER BY desig_value ASC ";
$run1 = mysqli_query($db,$query1);;
while($faculty=mysqli_fetch_array($run1)){
	if($faculty['departmentname']=='Department of Pharmaceutical-Chemistry'){
  ?>
 
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 pending">
														<a href="teacherprofile.php?id=<?=$faculty['id']?>" >
														<div class="cours-bx">
															
															<div class="user-profile-thumb">
									<img src="assets/images/testimonials/<?=$faculty['my_prof_pic']?>" alt=""/>
								</div>
															<div class="info-bx text-center">

																<h5><?=$faculty['my_name']?></h5>
																<span >-<?=$faculty['my_designation1']?></span>
																<span> <?=$faculty['my_designation']?></span>

																
															</div>
															
														</div>
														</a>
													</li>

											 <?php

}
}

       ?>
												</ul>
											</div>

										</div>

										<div class="profile-head"><a data-toggle="collapse" href="#faq2" class="collapsed" data-parent="#faq2">
											<i><h3>Department of Pharmaceutics</h3></i></a>
											&nbsp;&nbsp;<a data-toggle="collapse" href="#faq2" class="collapsed acod-title fa fa-sort-down" data-parent="#faq2"></a>
											
										</div>
										<div class="courses-filter">
											<div class="clearfix acod-body collapse" id="faq2">
												<ul  class="ttr-gallery-listing magnific-image row">
													<?php
					
$query1 = "SELECT * FROM faculty ORDER BY desig_value ASC";
$run1 = mysqli_query($db,$query1);;
while($faculty=mysqli_fetch_array($run1)){
	if($faculty['departmentname']=='Department of Pharmaceutics'){
  ?>
 
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 pending">
														<a href="teacherprofile.php?id=<?=$faculty['id']?>" >
														<div class="cours-bx">
															
															<div class="user-profile-thumb">
									<img src="assets/images/testimonials/<?=$faculty['my_prof_pic']?>" alt=""/>
								</div>
															<div class="info-bx text-center">

																<h5><?=$faculty['my_name']?></h5>
																<span>-<?=$faculty['my_designation1']?></span>
																<span> <?=$faculty['my_designation']?></span>

																
															</div>
															
														</div>
														</a>
													</li>

											 <?php

}
}
          ?>
												</ul>
											</div>

										</div>
										<div class="profile-head"><a data-toggle="collapse" href="#faq3" class="collapsed" data-parent="#faq3">
											<i><h3> Department of Pharmacognosy</h3></i></a>
											&nbsp;&nbsp;<a data-toggle="collapse" href="#faq3" class="collapsed acod-title fa fa-sort-down" data-parent="#faq3"></a>
										</div>
										<div class="courses-filter">
											<div class="clearfix acod-body collapse" id="faq3">
												<ul class="ttr-gallery-listing magnific-image row">
													<?php

							

$query1 = "SELECT * FROM faculty ORDER BY desig_value ASC";
$run1 = mysqli_query($db,$query1);;
while($faculty=mysqli_fetch_array($run1)){
	if($faculty['departmentname']=='Department of Pharmacognosy'){
  ?>
 
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 pending">
														<a href="teacherprofile.php?id=<?=$faculty['id']?>" >
														<div class="cours-bx">
															
															<div class="user-profile-thumb">
									<img src="assets/images/testimonials/<?=$faculty['my_prof_pic']?>" alt=""/>
								</div>
															<div class="info-bx text-center">

																<h5><?=$faculty['my_name']?></h5>
																<span>-<?=$faculty['my_designation1']?></span>
																<span> <?=$faculty['my_designation']?></span>

																
															</div>
															
														</div>
														</a>
													</li>

											 <?php

}
}
          ?>
												</ul>
											</div>

										</div>


<div class="profile-head"><a data-toggle="collapse" href="#faq4" class="collapsed" data-parent="#faq4">
											<i><h3>Department of Pharmacology</h3></i></a>
											&nbsp;&nbsp;<a data-toggle="collapse" href="#faq4" class="collapsed acod-title fa fa-sort-down" data-parent="#faq4"></a>
											
										</div>
										<div class="courses-filter">
											<div class="clearfix acod-body collapse" id="faq4">
												<ul  class="ttr-gallery-listing magnific-image row">
													<?php

							

$query1 = "SELECT * FROM faculty ORDER BY desig_value ASC";
$run1 = mysqli_query($db,$query1);;
while($faculty=mysqli_fetch_array($run1)){
	if($faculty['departmentname']=='Department of Pharmacology'){
  ?>
 
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 pending">
														<a href="teacherprofile.php?id=<?=$faculty['id']?>" >
														<div class="cours-bx">
															
															<div class="user-profile-thumb">
									<img src="assets/images/testimonials/<?=$faculty['my_prof_pic']?>" alt=""/>
								</div>
															<div class="info-bx text-center">

																<h5><?=$faculty['my_name']?></h5>
																<span>-<?=$faculty['my_designation1']?></span>
																<span> <?=$faculty['my_designation']?></span>

																
															</div>
															
														</div>
														</a>
													</li>

											 <?php

}
}
          ?>
												</ul>
											</div>

										</div>


										<div class="profile-head">
											<a data-toggle="collapse" href="#faq5" class="collapsed" data-parent="#faq5"><i><h3>Department of Pharmacy-Practice</h3></i></a>
											&nbsp;&nbsp;<a data-toggle="collapse" href="#faq5" class="collapsed acod-title fa fa-sort-down" data-parent="#faq5"></a>
										</div>
										<div class="courses-filter">
											<div class="clearfix acod-body collapse" id="faq5">
												<ul class="ttr-gallery-listing magnific-image row">
													<?php

							

$query1 = "SELECT * FROM faculty ORDER BY desig_value ASC";
$run1 = mysqli_query($db,$query1);;
while($faculty=mysqli_fetch_array($run1)){
	if($faculty['departmentname']=='Department of Pharmacy-Practice'){
  ?>
 
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 pending">
														<a href="teacherprofile.php?id=<?=$faculty['id']?>" >
														<div class="cours-bx">
															
															<div class="user-profile-thumb">
									<img src="assets/images/testimonials/<?=$faculty['my_prof_pic']?>" alt=""/>
								</div>
															<div class="info-bx text-center">

																<h5><?=$faculty['my_name']?></h5>
																<span>-<?=$faculty['my_designation1']?></span>
																<span> <?=$faculty['my_designation']?></span>

																
															</div>
															
														</div>
														</a>
													</li>

											 <?php

}
}
          ?>
												</ul>
											</div>

										</div>
									</div>

					<!-------not required		
									<div class="tab-pane" id="quiz-results">
										<div class="profile-head">
											<h3>Quiz Results</h3>
										</div>
										<div class="courses-filter">
											<div class="row">
												<div class="col-md-6 col-lg-6">
													<ul class="course-features">
														<li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
														<li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
														<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
														<li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>
														<li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>
														<li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
														<li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>
													</ul>
												</div>
												<div class="col-md-6 col-lg-6">
													<ul class="course-features">
														<li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
														<li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
														<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
														<li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>
														<li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>
														<li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
														<li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="edit-profile">
										<div class="profile-head">
											<h3>Edit Profile</h3>
										</div>
										<form class="edit-profile">
											<div class="">
												<div class="form-group row">
													<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
														<h3>1. Personal Details</h3>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full Name</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="Mark Andre">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Occupation</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="CTO">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Company Name</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="EduChamp">
														<span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone No.</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="+120 012345 6789">
													</div>
												</div>
												
												<div class="seperator"></div>
												
												<div class="form-group row">
													<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
														<h3>2. Address</h3>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Address</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="5-S2-20 Dummy City, UK">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">City</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="US">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">State</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="California">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Postcode</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="000702">
													</div>
												</div>

												<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

												<div class="form-group row">
													<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
														<h3 class="m-form__section">3. Social Links</h3>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Linkedin</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.linkedin.com">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Facebook</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.facebook.com">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Twitter</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.twitter.com">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Instagram</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.instagram.com">
													</div>
												</div>
											</div>
											<div class="">
												<div class="">
													<div class="row">
														<div class="col-12 col-sm-3 col-md-3 col-lg-2">
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-7">
															<button type="reset" class="btn">Save changes</button>
															<button type="reset" class="btn-secondry">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="change-password">
										<div class="profile-head">
											<h3>Change Password</h3>
										</div>
										<form class="edit-profile">
											<div class="">
												<div class="form-group row">
													<div class="col-12 col-sm-8 col-md-8 col-lg-9 ml-auto">
														<h3>Password</h3>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Current Password</label>
													<div class="col-12 col-sm-8 col-md-8 col-lg-7">
														<input class="form-control" type="password" value="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">New Password</label>
													<div class="col-12 col-sm-8 col-md-8 col-lg-7">
														<input class="form-control" type="password" value="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Re Type New Password</label>
													<div class="col-12 col-sm-8 col-md-8 col-lg-7">
														<input class="form-control" type="password" value="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-sm-4 col-md-4 col-lg-3">
												</div>
												<div class="col-12 col-sm-8 col-md-8 col-lg-7">
													<button type="reset" class="btn">Save changes</button>
													<button type="reset" class="btn-secondry">Cancel</button>
												</div>
											</div>
												
										</form>
									</div>
									-------not required==-->
								</div> 
							</div>
						</div>
					</div>
					<!-- Pagination ==== -->
					
				</div>

            </div>

        </div>
		<!-- contact area END -->

    </div>
    <!-- Content END-->
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
										<li><a href="index.html">Home</a></li>
										<li><a href="about-1.php">About</a></li>
										<li><a href="event.php">Event</a></li>
										<li><a href="contact-1.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Programs</h5>
									<ul>
										<li><a href="courses.html">PharmD Program</a></li>
										<li><a href="#">MPhil Program</a></li>
										<li><a href="#">PhD Program</a></li>
										
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a >Email: info@juw.edu.pk</a></li>
										<li><a >Phone: +92(021)36620614</a></li>
										
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
                
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
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
