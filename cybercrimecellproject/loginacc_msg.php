<html>
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>
			Cyber Crime Cell | Login
		</title>
		
		<style>
			<?php include('style.css'); ?>
			<?php include('online.css'); ?>
			
			.error{color:red; position:absolute;top:78%;left:32%;
			font-size:14px;}
			body{background-image :url('log1.jpg');
		</style>
	
	</head>
	
	<body>
		
		<header>
			<div class="department">
				<em>LOGIN</em>	
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
				
				<form class="box1" method="post" action="login_validate.php">
					
					<h1>
						User Login
					</h1>
					
					<input type="text" name="username" placeholder="email" />
					<input type="password" name="password" placeholder="Password" />
					<input type="submit" name="submit" value="Log In" />
					<span class="error">Invalid email or password</span>
					<a href="http://localhost/Project/create_acc.php" style="color: white;">Create Account </a>
				
				</form>
			
			</div>
		
		</section>
	
	</body>
</html>