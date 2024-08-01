<?php
	session_start();
    if(!isset($_SESSION['log']))
    {
        include 'header.php';
    }
    else
    {
      include 'header1.php';
    }
?>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To GPG Study Material</h6>
						<h3>Leading
							<span>University</span>
						</h3>
						
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To GPG Study Material</h6>
						<h3>Most Popular
							<span>Education</span>
						</h3>
						
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To GPG Study Material</h6>
						<h3>We Can
							<span>Teach</span> You</h3>
						
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h6>Welcome To GPG Study Material</h6>
						<h3>Most Popular
							<span>Education</span>
						</h3>
						
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--banner -->
	<!--//banner -->
	<!-- about -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>W</span>elcome
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4>About
						<span>GPG Study Material</span>
					</h4>
					<p>We are offering various courses on both Diploma Engineering and Degree Engineering. We are having the team of experienced faculties. </p>
					<p>Our aim is to encourage students in their interested fields. We provide good education for the better future of Students.  GPG  has always stood firmly for the ideals of academic excellence.</p>
					
				</div>
				<!-- Stats-->
				<?php 

					$qry1="SELECT COUNT(*) FROM tbl_login WHERE l_role=2";
				   	$run1=mysqli_fetch_array(mysqli_query($con,$qry1));
				   	$qry2="SELECT COUNT(*) FROM tbl_login WHERE l_role=3";
					$run2=mysqli_fetch_array(mysqli_query($con,$qry2));
					$qry3="SELECT COUNT(*) FROM tbl_branch WHERE b_status=1";
					$run3=mysqli_fetch_array(mysqli_query($con,$qry3));
					$qry4="SELECT COUNT(*) FROM tbl_subject WHERE sub_status=1";
					$run4=mysqli_fetch_array(mysqli_query($con,$qry4));
				?>
				<div class="col-md-6 stats-info-agile">
					<div class="col-xs-6 stats-grid stat-border">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $run1[0];?>' data-delay='.5' data-increment="1"><?php echo $run1[0];?></div>
						<p>Faculties</p>
					</div>
					<div class="col-xs-6 stats-grid">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $run2[0];?>' data-delay='.5' data-increment="1"><?php echo $run2[0];?></div>
						<p>Student</p>
					</div>
					<div class="clearfix"></div>
					<div class="child-stat">
						<div class="col-xs-6 stats-grid stat-border border-st2">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $run3[0];?>' data-delay='.5' data-increment="1"><?php echo $run3[0];?></div>
							<p>Branch</p>
						</div>
						<div class="col-xs-6 stats-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $run4[0];?>' data-delay='.5' data-increment="1"><?php echo $run4[0];?></div>
							<p>Subjects</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>S</span>ervices
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="services-moksrow">
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-bullhorn icon" aria-hidden="true"></span>
						<h4>Popular Courses</h4>
						<!-- <p>Phasellus at placerat ante nulla adipiscing elit</p> -->
					</div>
				</div>
				<!-- <div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-certificate icon" aria-hidden="true"></span>
						<h4>Certification</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div> -->
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-book icon" aria-hidden="true"></span>
						<h4>Study Material Library</h4>
						<!-- <p>Phasellus at placerat ante nulla adipiscing elit</p> -->
					</div>
				</div>
				<!-- <div class="clearfix"> </div> -->
			</div>
			<div class="services-moksrow">
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-users icon" aria-hidden="true"></span>
						<h4>Best Teachers</h4>
						<!-- <p>Phasellus at placerat ante nulla adipiscing elit</p> -->
					</div>
				</div>
				<!-- <div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-bus icon" aria-hidden="true"></span>
						<h4>Transport Facility</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-laptop icon" aria-hidden="true"></span>
						<h4>Excellent Lab</h4>
						 <p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- middle section -->
	<div class="middle-sec-agile" style="margin-top: 5%;margin-bottom: 5%;">
		<div class="container">
			<h4>
				<span>GPG Study Material</span> </h4>
			<ul>
				<li>
					<div class="midle-left-w3l">
						<span class="fa fa-check" aria-hidden="true"></span>
					</div>
					<div class="middle-right">
						<h5>Select A Course You Like And Explore It!</h5>
						
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="midle-left-w3l">
						<span class="fa fa-check" aria-hidden="true"></span>
					</div>
					<div class="middle-right">
						<h5>Join A Seminar To Know More About It!</h5>
						
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="midle-left-w3l">
						<span class="fa fa-check" aria-hidden="true"></span>
					</div>
					<div class="middle-right">
						<h5>Get Enrolled And Start Better Future With Us!</h5>
						
					</div>
					<div class="clearfix"></div>
				</li>
			</ul>
			<a class="button-style" href="login.php">Join Now</a>
		</div>
		<div class="pencil-img">
			<img src="images/bg5.png" alt="" />
		</div>
	</div>
	<!-- //middle section -->
<?php
	include "footer.php";
?>