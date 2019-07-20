<?php
include 'connect.php';

$name= $_POST['name'];
$email= $_POST['email'];
$password = $_POST['password'];


if(!empty($name) || !empty($email) || !empty($password) )
{	
	$servername = "localhost";
	$username = "root";
	$dbpassword = "";
	$dbname = "cybercell";
}
else
{
	echo "All field are required";
	die();
}
$conn = new mysqli($servername, $username, $dbpassword);

if(mysqli_connect_error())
{
	die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
}
else
{
	$SELECT = "SELECT emailid From accountdetails Where emailid = ? Limit 1";
	$INSERT = "INSERT Into accountdetailsdetails (name, emailid, password) values(?,?,?)";
	
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	
	if(rnum==0)
	{
		$stmt->close();
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sss",$name,$email,$password);
		$stmt->execute();
		echo "Inserted";
	}
	else
	{
		echo "Already exists";
	}
	$stmt->close();
	$conn->close();
}
?>