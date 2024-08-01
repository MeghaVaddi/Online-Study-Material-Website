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
				<li>Edit Profile</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>Edit Profile</span>
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="#" method="post">
					<div class="">
						<p>Name</p>
						<input type="text" name="name" id="name" value="<?php echo $uname; ?>" placeholder="Enter your name" required />
					</div>
					<div class="">
						<p>Email</p>
						 <input type="email" name="email" id="email" value="<?php echo $uemail; ?>" placeholder="Enter your email " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                        required />
					</div>
					<div class="">
						<p>Phone Number</p>
						 <input type="text" name="phone" id="phone" value="<?php echo $uphone; ?>" pattern="[6789][0-9]{9}" placeholder="Enter your phone"
                                        required />
					</div>
					<div class="">
						<p>Address</p>
						<input type="text" name="add" id="add" value="<?php echo $uadd; ?>" placeholder="Enter your address" required />
					</div>
					<div class="">
						<div class="">
                            <img src="<?php echo $img; ?>">	
                        </div>
                    </div><br>
                    <div class="">
                            <input type="file" name="image" id="image" placeholder="Enter your image"/>
					</div><br>
					<div class="">
						<input type="submit" name="submit" value="Edit Profile ">
					</div>

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
	include 'footer.php';
  	if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $add=$_POST['add'];
        $image=$_POST['image'];
        if($image=="")
        {
          $qury1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add' WHERE l_id='$id'";
          $run1=mysqli_query($con,$qury1);
          if($run1)
          {
            echo "<script> alert('Profile Updated'); </script>";
            echo "<script> location.replace('index.php'); </script>";  
          }
          else
          {
            echo "<script> alert('Profile Not Updated'); </script>";
            echo "<script> location.replace('edit_profile.php'); </script>";  
          }
        }
        else
        {
          $location="photos/".$image;
          $query1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add', l_img='$location' WHERE l_id='$id'";
          $run1=mysqli_query($con,$query1);
          if($run1)
          {
            echo "<script> alert('Profile Updated'); </script>";
            echo "<script> location.replace('index.php'); </script>";  
          }
          else
          {
            echo "<script> alert('Profile Not Updated'); </script>";
            echo "<script> location.replace('edit_profile.php'); </script>";  
          } 
        }

    } 
?>