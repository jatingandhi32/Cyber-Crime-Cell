<?php
session_start();
$_SESSION['newem']=$_SESSION['em'];
?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>
			Cyber Crime Cell | Complaint
		</title>

		<style>
			<?php include('style.css'); ?>
			<?php include('online.css'); ?>
			.error{color:red;}
		</style>
	
	</head>
	
	<body>
	
		<header>
			
			<div class="department">
				<em>WELCOME TO OUR WEBSITE</em>	
				<div class="welcome">
					<a href="http://localhost/Project/logout_user.php">
						<em>Logout</em>
					</a>
				</div>
			</div>
			
			<!--Title of the page-->
			<div class="container">
				<div id="branding">
					<a href="http://localhost/Project/html/home.html">
						<h1>
							Cyber Crime Cell
						</h1>
					</a>
				</div>
			</div>
			
			<!--NAVIGATION BAR-->
			<nav >
				<ul class="navbar">
					<li><a href="http://localhost/Project/html/home.html">Home</a></li>
					<li><a href="http://localhost/Project/html/about.html">About The Cyber Cell</a></li>
					<li><a href="http://localhost/Project/html/cybercrimes.html">Cyber Crimes</a></li>
					<li><a href="http://localhost/Project/html/cybersafety.html">Cyber Safety</a></li>
					<li><a href="http://localhost/Project/html/report.html">Report A Cyber Crime</a></li>
					<li><a href="http://localhost/Project/detective_login.php">Detective Login</a></li>
					<li><a href="http://localhost/Project/html/contact.html">Contact Us</a></li>
				</ul>
			</nav>
		</header>
		
		<!--Complaint Status Link-->
		<section>
			<div class="container">
				<br />
				<center>
					<a style="font-size: 45px; color: #2c3e50;" href="http://localhost/Project/userstatus.php">
						Click here to check the status of your complaint.
					</a>
				</center>
			</div>
		</section>
		
		<!--Complaint Form-->
		<section >
			<div class="com">
				<form method="post" action="complaint_valid.php">
					<h2>Complaint Details</h2>
						Subject Of The Incident<br /><input type="text" name="subject" /> (like Hacking, Piracy, Fraud, Scam)
						<span class="error">* <?php echo $_SESSION['subjectErr'];?></span><br/>
						<br/>Date Of Incident<br/><input style="border: 1px solid black; padding: 9px; border-radius: 5px;" type="date" name="date" style="padding:10px ;" />
						<span class="error">* <?php echo  $_SESSION['dateErr'];?></span><br />
						<br />Time Of Incident<br/><input type="text" name="time"  />
						<br />
						<br />Write Complaint<br><textarea name="complaint" rows="8" cols="60"  ></textarea>
						<span class="error">* <?php echo  $_SESSION['complaintErr'];?></span><br><br/>
					<h2>Personal Details</h2>
						Name<br /><input type="text" name="name"  />
						<span class="error">* <?php echo  $_SESSION['nameErr'];?></span><br />
						<br />Mobile No.<br /><input type="text" name="num"  />
					<span class="error">* <?php echo  $_SESSION['numErr'];?></span><br />
						<br />E-mail<br /><input type="text" name="email"  />
						<span class="error">* <?php echo  $_SESSION['emailErr'];?></span><br />
					<br />
					<br />
					<input type="submit" class="buton" name="submit" value="Submit" /><br /><br />
				</form>
			</div>
		</section>
	
	</body>
</html>