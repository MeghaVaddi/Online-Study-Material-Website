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
	<div class="inner_page_agile">

	</div>
	<!--//banner -->
	<!-- short -->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- about -->
	<div class="about-sec" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>A</span>bout
					<span>U</span>s
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="about-sub">
				<div class="col-md-6 about_bottom_left">
					<h4>Welcome to
						<span>GPG Study Material</span>
					</h4>
					<p>Government Polytechnic for Girls - Ahmedabad (GPGA), a premier diploma engineering institute was established in the year 1964 with the aim to provide technical education to girls in the heritage city of Ahmedabad.</p>
					<p>At present, GPGA offers 3 year diplomas in 7 programmes under Commissionerate of Technical Education and is affiliated with Gujarat Technological University (GTU).</p>
					<a class="button-style" href="login.php">Join Now</a>
				</div>
				<!-- Stats-->
				<div class="col-md-6 about2-info">
					<img src="images/graduate.png" alt="" />
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->	

	<div class="testimonials">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>C</span>lient's
					<span>S</span>ay
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<ul id="flexiselDemo1">
				<?php
				    	$qry1="SELECT * FROM tbl_feedback";
				    	$run1=mysqli_query($con,$qry1);
				    	// $result1=mysqli_fetch_array($run1)
				    	while ($result1=mysqli_fetch_array($run1)) 
				    	{
				    		$l_id=$result1['l_id'];
				    		$qry2="SELECT * FROM tbl_login WHERE l_id='$l_id'";
				    		$run2=mysqli_query($con,$qry2);
				    		$result2=mysqli_fetch_array($run2);
				    		$pic=$result2['l_img'];
				    		if($result2['l_status']!=0)
				    		{
				    ?>			
    							<li>
									<div class="three_testimonials_grid_main">
										<div class="col-xs-3 three_testimonials_grid_pos">
											<div class="grid-test-allah-agile">
												<img src="<?php echo $pic; ?>" alt=" " class="img-responsive" />
											</div>
										</div>
										<div class="col-xs-9 three_testimonials_grid">
											<div class="three_testimonials_grid1">
												<h5><?php echo $result2['l_name']; ?></h5>
											</div>
											<p><?php echo $result1['feedback']; ?>
											</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
                    <?php
      						}
      					}
      				?>

			</ul>
		</div>
	</div>	
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Best
						<span>Study</span>
					</h4>
				</div>
				<div class="modal-body">
					<div class="model-img-info">
						<img src="images/e1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque
							ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis
							porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper. Cras tempor massa
							luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
<?php
	include "footer.php";
?>