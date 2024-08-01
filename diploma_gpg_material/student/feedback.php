<?php
	session_start();
    // if(!isset($_SESSION['log']))
    // {
    //     include 'header.php';
    // }
    // else
    // {
      include 'header1.php';
    // }
?>
<div class="inner_page_agile"></div>
<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Feedback</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>Feedback</span>
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="#" method="post">
					<div class="">
						<!-- <p>Enter Feedback</p> -->
						<textarea type="text" name="feedback" id="feedback" placeholder="Enter Feedback"required style="width: 100% "></textarea>
					</div>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>

		</div>
	</div>

<?php
	include 'footer.php';
if(isset($_POST['submit']))
    {

  		$feedback = $_POST['feedback'];
    	$lid= $id;
    	$query = "INSERT INTO `tbl_feedback` (`f_id`, `feedback`, `f_status`, `l_id`) VALUES ('', '$feedback', '1', '$lid')";    
        $result = mysqli_query($con,$query);
            
        if(!$result)
        {
            echo "<script>alert('Not Inserted');</script>";
        }
        else
        {      
            echo "<script> alert('Feedback Submitted'); </script>";
    		echo "<script> location.replace('index.php'); </script>";  
        }
  	}
?>