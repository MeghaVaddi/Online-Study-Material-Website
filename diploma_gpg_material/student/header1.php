<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    
include "connection.php";
// session_start();
    
    if(!isset($_SESSION['log']))
    {
        header("location:login.php");
    }
    
    else
    {
        $log = $_SESSION['log'];
        //echo "<script>alert('$log');</script>";
        $qry1="SELECT * FROM tbl_login WHERE l_email='$log'";
        $run1=mysqli_query($con,$qry1);
        $result1=mysqli_fetch_array($run1);
        $img=$result1['l_img'];
        $id = $result1['l_id'];
        $uname= $result1['l_name'];
        $uemail= $result1['l_email'];
        $uphone= $result1['l_phone'];
        $uadd= $result1['l_add'];
        $l_pass = $result1['l_pass'];
        // print_r($result1);
        //echo "<script> alert('$log'); </script>";
    }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>GPG Study Material</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<div class="header-top">
		<div class="container">
			<div class="bottom_header_left">
				<p>
					<span class="fa fa-map-marker" aria-hidden="true"></span>University Area, Ahmedabad,Gujarat
				</p>
			</div>
			<div class="bottom_header_right">
				<div class="header-top-righ">
					<a href="logout.php">
						<span class="fa fa-sign-out" aria-hidden="true"></span>Log Out</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<h1>
								<span class="fa fa-leanpub" aria-hidden="true"></span>GPG Study Material
								<label>Education & Courses</label>
							</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="index.php" class="effect-3">Home</a>
								</li>
								<li>
									<a href="about.php" class="effect-3">About Us</a>
								</li>
								<li>
									<a href="diploma.php" class="effect-3">Diploma</a>
								</li>
								<li>
									<a href="degree.php" class="effect-3">Degree</a>
								</li>
								<li>
									<a href="material.php" class="effect-3">Material</a>
								</li>
								<li>
									<a href="feedback.php" class="effect-3">Feedback</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="edit_profile.php">Edit Profile</a>
										</li>
										<li>
											<a href="change_pass.php">Change Password</a>
										</li>
									</ul>
								</li>
								<!-- <li>
									<a href="Gallery.html" class="effect-3">Gallery</a>
								</li> -->
								
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	
	
	<!-- //testimonials -->
	