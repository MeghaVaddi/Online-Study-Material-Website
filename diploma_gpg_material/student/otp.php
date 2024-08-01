<?php
	include "header.php";
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
				<li>Forget Password</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>OTP</span>
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="#" method="post">
					<div class="">
						<p>OTP</p>
						<input type="text" class="otp" name="otp" required="" />
					</div>
					<!-- <div class="">
						<p>Password</p>
						<input type="password" class="password" name="pass" required="" />
					</div> -->
					<!-- <label class="anim">
						<input type="checkbox" class="checkbox">
						<span> Remember me ?</span>
					</label> -->
					<!-- <div class="login-agileits-bottom wthree">
						<h6>
							<a href="forget.php">Forgot password?</a>
						</h6>
					</div> -->
					<input type="submit" name="submit" value="Next">
					<!-- <div class="register-forming">
						<p>To Register New Account --
							<a href="register.html">Click Here</a>
						</p>
					</div> -->
				</form>
			</div>

		</div>
	</div>
<?php
	include "footer.php";
	 if(isset($_POST['submit']))
  {

  $otp_enter=$_POST['otp'];

  $q1="SELECT * FROM tbl_otp ORDER BY o_id DESC LIMIT 1 ";
  $run=mysqli_query($con,$q1);
  $result=mysqli_fetch_array($run);
  $otp=$result['otp'];
  $lid=$result['l_id'];
  //echo "<script>alert('$otp'); </script>";
  if($otp==$otp_enter)
  { 
    echo "<script>location.href='set_password.php?id=$lid'</script>";
    
  }
  else
  {
    echo "<script>alert('Incorrect OTP'); </script>";
     header("location:otp.php?id=".$lid);
    //echo $otp;
  }
}

?>