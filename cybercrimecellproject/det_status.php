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
	$sql="SELECT caseid,subject,date,time,complaint FROM complaintdetails WHERE caseid=$_POST['caseret'] ";
	$result = $conn -> query($sql);
	if($result -> num_rows > 0)
	{
		echo "<table align='center' border='2'><tr><th>CASE ID</th><th>SUBJECT</th><th>DATE</th><th>TIME</th><th>Complaint</th></tr>";
		while($row=$result->fetch_assoc())
		{
			
			echo " <tr><td>".$row["caseid"]."</td><td>".$row["subject"].  "</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["complaint"]."</td></tr>" ;
			
		}
		echo "</table>";
		
	}
	else
	{	
		echo "0 results";
	}
		$conn->close();				
?>