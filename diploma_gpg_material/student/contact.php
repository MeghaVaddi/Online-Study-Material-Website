<?php
	include "header.php";
?>
<div class="inner_page_agile">

	</div>
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>C</span>ontact
					<span>U</span>s
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			
		</div>
	</div>
	<div class="contact-lsleft" style="margin-top: 2%;">
		<div class="container">
			
			<div class="contact-grid agileits">
				<h4>Get In Touch</h4>
				<form action="#" method="post">
					<div class="">
						<input type="text" name="name" placeholder="Name" required="">
					</div>
					<div class="">
						<input type="email" name="email" placeholder="Email" required="">
					</div>
					<div class="">
						<input type="text" name="phone" placeholder="Phone Number" required="">
					</div>
					<div class="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
					</div>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
<?php
	include "footer.php";
	if(isset($_POST['submit']))
    {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
             
        $query = "INSERT INTO tbl_contact(c_id,c_name,c_email,c_phone,c_message,c_time,c_status)           VALUES('','$name','$email','$phone','$message',current_timestamp(),1)";
            
                $result = mysqli_query($con,$query);
                    
                if(!$result)
                {
                    echo "<script>alert('Not Inserted');</script>";
                }
                
                else
                {           
                    echo "<script>alert('Thanks for Contacting');</script>";
                }
    }
?>