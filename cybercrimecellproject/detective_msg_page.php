<?php 
session_start();
$_SESSION['detem']=$_SESSION['em'];
?>
<!DOCTYPE html>
<html>
	
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>
			Cyber Crime Cell | User
		</title>
		
		<style>
			<?php include('style.css'); ?>
			<?php include('table.css'); ?>
			<?php include('foot.css'); ?>
			p
			{
				font-size: 30px; 
				color: #2c3e50;
			}
		</style>
	</head>
	
	<body>
	
	<header>
			<div class="department">
				<em>WELCOME TO OUR WEBSITE</em>
				<div class="welcome">
				
				<a href="http://localhost/Project/detective_login.php"><em>Logout</em></a>
				</div>
			</div>
			<div class="container">
				<div id="branding">
					<a href="http://localhost/php/home.html">
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
		
		<section>
			<div class="container">
				<a style="font-size: 30px; color: #2c3e50; float: right;" href="http://localhost/Project/det_case_file.php">Previously Taken Case</a>
			</div>
		</section>
		<section >
			<div class="container">
				<h1 style="font-size: 45px; color: #2c3e50;">
					<center>Available Cases To Be Solved</center>
				</h1>
				
				<?php	
					$serverName = "localhost";
					$dbUsername = "root";
					$dbPassword = "";
					$dbName = "cybercell";
					// Database Name

					$conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);
					// Connnection

					if ($conn -> connect_error)
					  {
						  die("Connection failed: " . $conn -> connect_error);
					  }	

					$sql="SELECT caseid,subject FROM complaintdetails WHERE status =0  ";
					$result = $conn -> query($sql);
					
					if($result -> num_rows > 0)
					{	
						echo"<p>Solve previous case first </p><br/>";
						echo "<table align='center' border='2'><tr><th>CASE ID</th><th>SUBJECT</th></tr>";
						while($row=$result->fetch_assoc())
						{
							
							echo " <tr><td>".$row["caseid"]."</td><td>".$row["subject"].  "</td></tr>" ;
							
						}
						echo "</table>";	
					}
					else
					{	
						echo "No results found";
					}
					
					$conn->close();				
				?>
			</div>
		</section>
		
		<section>
			<div class="container">
				<form method="post" action="det_display.php">
					<br /><br />
					<label style="font-size: 30px; color: #2c3e50; ">Enter the caseID you want to see:
					<input type="text" name="caseret" id="caseret" />
					</label>
					<br />
					<input class="button" type="submit" name="submit" value="Submit" />
				</form>
			</div>
		</section>
		
		<!--FOOTER CONTAINING QUICK LINKS TO OTHER PAGES OF THE WEBSITE-->
		<footer>
			<div class="container">
				<div class="footerbxs">
					
					<div class="foot1">
						
						<h4>Main Link</h4>
						<span></span>
						
						<ul>
							<li><a href="http://localhost/Project/html/home.html">Home</a></li>
							<li><a href="http://localhost/Project/html/cybercrimes.html">Cyber Crimes</a></li>
							<li><a href="http://localhost/Project/html/cybersafety.html">Cyber Safety</a></li>
							<li><a href="http://localhost/Project/html/report.html">Report A Cyber Crime</a></li>
							<li><a href="http://localhost/Project/detective_login.php">Detective Login</a></li>
							<li><a href="http://localhost/Project/html/contact.html">Contact Us</a></li>
						</ul>
					</div>
					
					<div class="foot2">
						
						<h4>Cyber Crimes</h4>
						<span></span>
						
						<ul>
							<li><a href="http://localhost/Project/html/emailfrauds.html">Email Frauds</a></li> 
							<li><a href="http://localhost/Project/html/socialmediacrimes.html">Social Media Crimes</a></li> 
							<li><a href="http://localhost/Project/html/mobileapprelatedcrimes.html">Mobile App related Crimes</a></li> 
							<li><a href="http://localhost/Project/html/wiredtransfer.html">Business Email Compromise</a></li> 
							<li><a href="http://localhost/Project/html/datatheft.html">Data Theft</a></li> 
							<li><a href="http://localhost/Project/html/ransomware.html">Ransomeware</a></li>
						</ul>
						
						<ul>
							<li><a href="http://localhost/Project/html/netbanking.html">Net Banking/ATM Frauds</a></li> 
							<li><a href="http://localhost/Project/html/fakecallsfrauds.html">Fake Calls Frauds</a></li> 
							<li><a href="http://localhost/Project/html/insurancefrauds.html">Insurance Frauds</a></li> 
							<li><a href="http://localhost/Project/html/lotteryscam.html">Lottery Scam</a></li> 						
							<li><a href="http://localhost/Project/html/bitcoin.html">Bitcoin</a></li>	
							<li><a href="http://localhost/Project/html/cheatingscams.html">Cheating Scams</a></li>
						</ul>
					
					</div>
					
					<div class="foot4">
					
						<h4>Contact Us</h4>
						<span></span>
						
						<ul>
							
						</ul>
					
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>