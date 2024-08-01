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
			<?php 
				$qry1="SELECT * FROM tbl_branch WHERE b_stream=2";
			 	$run1=mysqli_query($con,$qry1);
			 	while ($res1=mysqli_fetch_array($run1)) 
			 	{
			 		echo '<div class="blog-info">
							<div class="col-xs-4 blog-grid-img">
								<img src="images/c7.jpg" class="img-responsive" alt="" />
							</div>
							<div class="col-xs-8 blog-grid-text">
								<h4>'.$res1['b_name'].'</h4>
								<h6>Degree</h6>
								<p>A Bachelor of Engineering (abbreviated as BE or BEng) is a first professional undergraduate academic degree awarded to a student after three to five years of studying engineering at an accredited university.</p>
							</div>
							<div class="clearfix"> </div>
						</div><br>';
			 	}
			?>
		</div>
	</div>
<?php
	include "footer.php"; 
?>