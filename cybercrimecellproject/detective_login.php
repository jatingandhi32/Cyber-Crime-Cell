<html>
	
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>
			Cyber Crime Cell | Detective Login
		</title>
		
		<style>
			<?php include('style.css'); ?>
			<?php include('online.css'); ?>
			.error{color:white; position:absolute;top:78%;left:26%;
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
				
				<form class="box1" method="post" action="det_login_validate.php">
					<h1>
						EXPERT LOGIN
					</h1>
					<input type="text" name="username" placeholder="Username" />
					<input type="password" name="password" placeholder="Password" />
					<input type="submit" name="submit" value="Log In" />
					<!--<span class="error"><?php echo $error ?></span>-->
					<a href="http://localhost/Project/detective_create_acc.php">Create Account </a>
				</form>
		
			</div>
		</section>
	
	</body>
</html>
