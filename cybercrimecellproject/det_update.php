<?php	
session_start();

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
					
					$value=$_POST['status'];
					$sql="SELECT detcaseid FROM detectivedetails WHERE email = '$_SESSION[em]' ";
					$result = $conn -> query($sql);

					if($result -> num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{	
							$detcase = $row["detcaseid"] ;
						}
					}
					if($detcase == NULL)
					{

						if($value == 1)
						{
							$sqli = "UPDATE detectivedetails SET detcaseid = $_SESSION[cid]  WHERE email = '$_SESSION[detem]' ";
							$conn->query($sqli);
						}

						$sql = "UPDATE complaintdetails SET status = $value WHERE caseid = $_SESSION[cid] ";


						if ($conn->query($sql) === TRUE) 
						{
							header("Location: detective_page.php");
							exit;
						} 
						else 
						{
							echo "Error updating record: " . $conn->error;
						}
					}
					else
					{	
						if($value==1)
						{
						header("Location:detective_msg_page.php");
						exit;
						}
						else
						{header("Location:detective_page.php");
						exit;
						}
							
					}
					
					$conn->close();				
?>