<?php
require('include/db.php');
if(isset($_POST['reset'])){
    if (isset($_GET['id'])) {
        // code...
    $id = $_GET['id'];
    $pass =mysqli_real_escape_string($db, $_POST['pass']);
    $cpass =mysqli_real_escape_string($db, $_POST['cpass']);


        if($pass=== $cpass){
        $updatequery ="UPDATE faculty set password = '$pass' WHERE id = '$id'";
        $iquery =mysqli_query($db, $updatequery);
            if ($iquery) {
               $msg="*/Password has been changed";
               header("Location: login.php?msg=".$msg);
            }else{
            $msg1="*/Password not changed";
            
               header("Location: login.php?msg1=".$msg1);
            }
        }else{
             $msg1="*/Password and Confirm Password does not match";
            header("Location: login.php?msg1=".$msg1);
        }
    }else{
        $msg1="*/User not found";
            header("Location: login.php?msg1=".$msg1);
    }
}

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
	<div class="account-form">
		<div class="account-head" >
			<a ><img src="assets/images/logo.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Reset <span>Password</span></h2>
					<p>Login Your Account <a href="login.php">Click here</a></p>
				</div>
				<?php
                  
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h5 style="color: red">'.$_SESSION['status'].'</h5>';
                    unset($_SESSION['status']);
                  }
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h5 style="color: green">'.$_SESSION['success'].'</h5>';
                    unset($_SESSION['success']);
                  }

                  ?>
                  <?php
                  if (isset($_GET['msg'])) echo '<h5 style="color: red">'. $_GET['msg'].'</h5>';
                   ?>
				<form class="contact-bx" action="" method="post" enctype="multipart/form-data">
					 
					<div class="row placeani">
						<style >
    .field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
  </style>
						
						<div class="col-lg-12">
							
							<div class="form-group">
								<div class="input-group"> 
									<label>New Password</label>
									<input type="password" id="password-field11"  class="form-control" title="Wrong Username or Password"   name="pass" id="exampleInputEmail1" required="">
                     <span toggle="#password-field11" class="fa fa-fw fa-eye-slash field-icon toggle-password11"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							
							<div class="form-group">
								<div class="input-group"> 
									<label>Confirm Password</label>
									<input type="password" id="password-field12"  class="form-control" title="Wrong Username or Password"   name="cpass" id="exampleInputEmail1" required="">
                     <span toggle="#password-field12" class="fa fa-fw fa-eye-slash field-icon toggle-password12"></span>
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 m-b30">
							<button name="reset" type="submit" value="Submit" class="btn button-md">Reset</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
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
<script >
  $(".toggle-password11").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
<script >
  $(".toggle-password12").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>

</html>
