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
				<li>Login</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>L</span>ogin
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="check_login.php" method="post">
					<div class="">
						<p>Email</p>
						<input type="email" class="email" name="email" required="" />
					</div>
					<div class="">
						<p>Password</p>
						<input type="password" class="password" name="pass" required="" />
					</div>
					<!-- <label class="anim">
						<input type="checkbox" class="checkbox">
						<span> Remember me ?</span>
					</label> -->
					<div class="login-agileits-bottom wthree">
						<h6>
							<a href="forget.php">Forgot password?</a>
						</h6>
					</div>
					<input type="submit" name="submit" value="Login">
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
?>