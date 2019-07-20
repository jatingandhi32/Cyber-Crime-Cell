<?php
	session_start();
	$_SESSION['em']=$_POST['username'];
?>
<?php
	
	$serverName = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "cybercell";
	$error="";
	// Database Name
	
	$conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);
	// Connnection
	
	if ($conn -> connect_error)
	  die("Connection failed: " . $conn -> connect_error);
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		header("Location: loginacc_msg.php");
		exit;
	}		
	if(isset($_POST['submit']))
	{
	// Username & Password from Form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// SQL Query
	$sql = "SELECT password FROM accountdetails WHERE  emailid = '$username'" ;
	
	// Result of SQL Query
	$result = $conn -> query($sql);

	// Checks for non-empty result with a matching password
	if ($result -> num_rows == 1) 
	{
		$row = $result -> fetch_assoc();
		if ($row["password"] == ($password)) 
		{
			header("Location: compaint.php");
			exit;
		}
		else 
		{
			header("Location: loginacc_msg.php");
			exit;
		}
	}
	else 
	{	
		header("Location: loginacc_msg.php");
		exit;
	}
	
	$conn->close();}
?>