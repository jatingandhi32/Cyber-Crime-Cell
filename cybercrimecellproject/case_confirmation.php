<?php	

	$caseid=$_POST["confirm"];
	
	if(!empty($_POST["confirm"]))
	{
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
		
		$sql="SELECT status FROM complaintdetails WHERE caseid=$caseid ";
		$result = $conn -> query($sql);

		if($result -> num_rows >0)
		{
			while($row=$result->fetch_assoc())
			{	
				$value = $row["status"];
			}
		}

		if($value == 1)
		{
			$sqli = "UPDATE complaintdetails SET confirmation = 1  WHERE caseid=$caseid ";
			$conn->query($sqli);
			header("Location: detective_page.php");
			exit;
		}
		
		$conn->close();	
	}
	else
	{
		header("Location: det_case_file.php");
		exit;
	}	
?>