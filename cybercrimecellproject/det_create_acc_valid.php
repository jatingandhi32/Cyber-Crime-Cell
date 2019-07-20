<?php
	 session_start();
	 $_SESSION["em"]=$_POST["email"];
		
	// define variables and set to empty values
	$nameErr = $passwordErr = $cpasswordErr = $emailErr = "";
	$name = $password =$cpassword = $email ="";


	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		
			$name = test_input($_POST["name"]);
			$email = test_input($_POST["email"]);
			 $password= (test_input($_POST["password"]));
			$cpassword = test_input($_POST["cpassword"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
				$error = 1;
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$error = 1;
			}
			if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $password) === 0)
				$error = 1;
		
			if ($_POST["cpassword"]  != $_POST["password"]) 
			{
				$error = 1;
			}
		
	}
		if( empty($name)  || empty($email) || empty($password) ||empty($cpassword))
		{ 	header("Location: det_create_msg.php");
			exit;
		}
	
if($error !=1)
{
	
	if(!empty($name) && !empty($email) && !empty($password))
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
				$SELECT = "SELECT Email From detectivedetails Where Email = ? Limit 1";
				$INSERT = "INSERT Into detectivedetails (Name, Email, Password) values(?,?,?)";
				
				$stmt = $conn->prepare($SELECT);
				$stmt->bind_param("s",$email);
				$stmt->execute();
				$stmt->bind_result($email);
				$stmt->store_result();
				$rnum = $stmt->num_rows;
				
				if($rnum==0)
				{
					$stmt->close();
					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("sss",$name,$email,$password);
					$stmt->execute();
					//echo "Inserted";
					header("Location: detective_page.php");
					exit;
				}
	
				else
				{
					header("Location: detective_msg_page_exist.php");
					exit;
				}
				$stmt->close();
				$conn->close();
			}
	}
	else
	{
		header("Location: det_create_msg.php");
		exit;
	}
}
else
{
	header("Location: det_create_msg.php");
	exit;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>