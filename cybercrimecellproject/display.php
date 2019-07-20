<?php
if(isset($_POST['submit']))
{	$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cybercell";
// Database Name
$conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);
// Connnection
if ($conn -> connect_error)
  die("Connection failed: " . $conn -> connect_error);
	//include'connect.php';
	$sql="SELECT * FROM complaintdetails";
	$result = $conn->query($sql);
	if($result->rows>0)
	{
		while($row=$result->fr=etch_assoc())
		{
			echo "Case id :".$row["caseid"]." Subject : ".$row["subject"]. "Time : ".$row[time]." Date : ".$row[date]. " Complaint : ".$row[complaint]. "<br>" ;
		}
	}
	else
	{	
		echo "0 results";
	}
	$conn->close();
}
?>