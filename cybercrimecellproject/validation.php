	<?php
	 
	
// define variables and set to empty values
 $nameErr = $passwordErr = $cpasswordErr = $emailErr = "";
$name = $password =$cpassword = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }	
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
  }
    if (empty($_POST["password"])) {
    $passwordErr = "Email is required";
  } else {
    $password = test_input($_POST["password"]);
   
  }
  if (empty($_POST["cpassword"])) {
    $cpasswordErr = "Email is required";
  } else {
    $cpassword = test_input($_POST["cpassword"]);
   
  }
   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>