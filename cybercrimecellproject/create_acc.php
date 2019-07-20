<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Cyber Crime Cell | Create Account
		</title>
        <style>
		<?php include('style.css'); ?>
		<?php include('online.css'); ?>
		
		.error{color:red;}
		body{background-image :url('log1.jpg');}
		
		</style>
		<script src="create_validation.js"></script>
	</head>

	<body >
		<header>
			<div class="department">
				<em>WELCOME TO OUR WEBSITE</em>	
			</div>
			<div class="container">
				<div id="branding">
					<a href="http://localhost/Project/html/home.html">
						<h1>
							Cyber Crime Cell
						</h1>
					</a>
				</div>
			</div>
		</header>
		<section>
			
			<div class="container">
				<form class="box2" method="post" action="createacc_user_valid.php " >
					<h1>
						User Create Account
					</h1>
					<br />
					<input type="text" name="name" placeholder="name" id="name" onchange="validateName();" /><br/>
					<input style="color: red; margin: 0px auto;; border: none; padding: 0;" type="text" name="error" placeholder="" id="name_error" value=" " onfocus="this.blur();" /><br/>
					<input type="text" name="email" placeholder="email id"  id="email" onblur="validateEmail();"/><br/>
					<input style="color: red; margin: 0px auto; border: none; padding: 0;" type="text" name="error" placeholder="" id="email_error" value=" " onfocus="this.blur();"  /><br/>
					<input type="password" name="password" placeholder="password" id="pass" onchange="validatePwd();" /><br/>
					<input style="color: red; margin: 0px auto; border: none; padding: 0; width: 290px" type="text" name="error" placeholder="" id="password_error" value=" "  onfocus="this.blur();" /><br/>
					<input type="password" name="cpassword" placeholder="confirm password" id="confirm_pass" onchange="validateConfirmPwd();" />
					<br/>
					<input style="color: red; margin: 0px auto;; border: none; padding: 0;" type="text" name="error" placeholder="" id="confirm_password_error" value=" "  onfocus="this.blur();"  />	<br/>				
					<input type="submit" name="submit" value="Create" /><br/>
					<a href="http://localhost/Project/loginacc.php" style="color: white;">Existing Account?</a>
				</form>
			</div>
		</section>
	</body>
</html>