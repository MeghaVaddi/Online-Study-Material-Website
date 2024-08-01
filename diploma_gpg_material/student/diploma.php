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
<div class="inner_page_agile"></div>
<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Courses</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- blog -->
	<div class="blog-cource">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>P</span>opular
					<span>B</span>ranch
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<?php 
				$qry1="SELECT * FROM tbl_branch WHERE b_stream=1";
			 	$run1=mysqli_query($con,$qry1);
			 	while ($res1=mysqli_fetch_array($run1)) 
			 	{
			 		echo '<div class="blog-info">
							<div class="col-xs-4 blog-grid-img">
								<img src="images/c7.jpg" class="img-responsive" alt="" />
							</div>
							<div class="col-xs-8 blog-grid-text">
								<h4>'.$res1['b_name'].'</h4>
								<h6>Diploma</h6>
								<p>A diploma is a certification, deed, or document awarded by an educational institution (such as a college or university) testifying the recipient has graduated by successfully completing their courses of studies.</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>';
			 	}
			?>
			<!-- <div class="blog-agileinfo blog-info-mdl">
				<div class="col-xs-8 blog-grid-text">
					<h4>Academic English</h4>
					<h6>Diploma</h6>
					<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
						Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
					<a class="button-style" href="join.html">Apply Now</a>
				</div>
				<div class="col-xs-4 blog-grid-img blog-img-rght">
					<img src="images/c1.jpg" class="img-responsive" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-info">
				<div class="col-xs-4 blog-grid-img">
					<img src="images/c3.jpg" class="img-responsive" alt="" />
				</div>
				<div class="col-xs-8 blog-grid-text">
					<h4>HR Management</h4>
					<h6>Diploma</h6>
					<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
						Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien. </p>
					<a class="button-style" href="join.html">Apply Now</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="blog-agileinfo blog-info-mdl">
				<div class="col-xs-8 blog-grid-text">
					<h4>Process Engineering</h4>
					<h6>Diploma</h6>
					<p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
						Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
					<a class="button-style" href="join.html">Apply Now</a>
				</div>
				<div class="col-xs-4 blog-grid-img blog-img-rght">
					<img src="images/c7.jpg" class="img-responsive" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div> -->
		</div>
	</div>
<?php
	include "footer.php"; 
?>