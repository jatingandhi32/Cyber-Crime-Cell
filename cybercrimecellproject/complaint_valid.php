<?php
	session_start();
			
		/*if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["date"]) || empty($_POST["num"]) || empty($_POST["complaint"]) )
		{ 
			header("Location: compaint.php");
			exit;
		}*/
		
		$err=0;

		// define variables and set to empty values
		$subjectErr = $dateErr = $timeErr = $complaintErr = $nameErr = $numErr = $emailErr = "";
		$subject = $date = $time = $complaint = $name = $num = $email ="";
		$se =$de =$te = $ce = 0;

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if (empty($_POST["name"])) 
			{
				$_SESSION["nameErr"] = "Name is required";
				$err=1;
			} 
			else 
			{
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
				{
				 $_SESSION["nameErr"]= "Only letters and white space allowed";
				  $err=1;
				}
			}
			  
			if (empty($_POST["email"])) 
			{
				$_SESSION["emailErr"] = "Email is required";
				$err=1;
			} 
			else 
			{
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
					$_SESSION["emailErr"] = "Invalid email format";
					$err=1;
					
				}
			}
					
				


			if (empty($_POST["subject"]))
			{
				$_SESSION["subjectErr"] = "Subject is required";
				$err=1;

			} 
			else 
			{
				$subject = test_input($_POST["subject"]);
			}

			if (empty($_POST["time"])) 
			{
				$timeErr = "Time is required";
			} 
			else 
			{
				$time = test_input($_POST["time"]);
			}
			if (empty($_POST["date"])) 
			{
				$_SESSION["dateErr"] = "Date is required";
				$err=1;
			} 
			else 
			{
				$date = test_input($_POST["date"]);
			
				if(!preg_match("/^\d{4}-\d{2}-\d{2}$/",$date))
				{
					$_SESSION["dateErr"]  = "Only dd-mm-yyyy allowed";
				$de=1;
				}
			}
			if (empty($_POST["num"])) 
			{
				$_SESSION["numErr"] = "Number is required";
				$err=1;
			} 
			else 
			{
				$num = test_input($_POST["num"]);
				
				if(!preg_match("/^\d{3}-\d{3}-\d{4}$/",$num))
					{ $_SESSION["numErr"] = "Only ddd-ddd-dddd allowed";
				$err=1;
					}
			}
			if (empty($_POST["complaint"])) 
			{
				$_SESSION["complaintErr"] = "Complaint is required";
				$err=1;
			} 
			else
			{
				$complaint = test_input($_POST["complaint"]);
			}
		}
		if($err==1)
		{
			header("Location: compaint_msg.php");
			exit;
		}
		$status="0";
		
		if(!empty($name) || !empty($email) || !empty($password))
		{
			$servername="localhost";
			$username="root";
			$dbpassword="";	
			$db="cybercell";
			$conn = new mysqli($servername, $username, $dbpassword,$db);

			if(mysqli_connect_error())
			{
				die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			}
			else
			{
				if($de !=1)
				{
					$INSERT = "INSERT INTO complaintdetails(emid, subject, date, time,complaint,status) VALUES(?,?,?,?,?,?)";
					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("ssssss",$email,$subject,$date,$time,$complaint,$status);
					$stmt->execute();
					
					$stmt->close();
					$conn->close();
					header("Location: userstatus.php");
					exit;
				}
			}
		}
	
	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>