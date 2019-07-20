<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Cyber Crime Cell | Create Account
		</title>
        <style>
		<?php include('style.css'); ?>
		<?php include('online.css'); ?>
		
		.error{color:red;}
		body{background-image :url('log1.jpg');}
		
		</style>


		<script type="text/javascript" >
			function validateName() 
			{
				var name = document.getElementById("name");
				var error = document.getElementById("name_error");
			  
				// Module to Validate name and change to Title Case
				var tempName = "";
				// Acts are a flag for validity check and to convert Title Case
				var titleFlag = 0;

				name.value = name.value.trim();
				name.value = name.value.toLowerCase();

				if (name.value == "")
				error.innerHTML = "Name cannot be empty";
				else 
				{
					for (var index in name.value) 
					{
						if (name.value[index].match(/^[a-zA-Z]$/)) 
						{
							// Checks for letter
							if (index == 0)
							// First letter is capitalized
							tempName += name.value[index].toUpperCase();
							else 
							{
								if (titleFlag == 1) 
								{
									// Letter following a space is capitalized
									tempName += name.value[index].toUpperCase();
									titleFlag = 0;
								}
								else
								// Lower case letter is not affected
								tempName += name.value[index];
							}
						}
						else if(name.value[index].match(/^\s$/)) 
						{
							// Checks for space and updates flag
							tempName += name.value[index];
							titleFlag = 1;
						}

						else 
						{
							// Invalid character check
							titleFlag = 1;
							break;
						}
					}

					if (titleFlag == 1)
					// Throws the error 
					{ 
					error.value = "Invalid Name";
					name.focus();
					}
					else 
					{
						// Updates value attribute
						error.value = "";
						name.value = tempName;
					}
				}
			}

			function validateEmail() 
			{
				var email = document.getElementById("email");
				var error = document.getElementById("email_error");

				email.value = email.value.toLowerCase();
				
				if (email.value.match(/^\S+@\S+\.\S+$/))
					error.value = "";
				else
				{
					error.value = "Invalid Email ID";
					//email.focus();
					return false;
				} 
			}

			function validatePwd() 
			{
				var password = document.getElementById("pass");
				var error = document.getElementById("password_error");
				// Lowercase, Uppercase, Number, Special Character
				var flag = [0, 0, 0, 0];

				if (password.value.match(/^\S{8,18}$/)) 
				{
					for (var index in password.value) 
					{
						if (password.value[index].match(/^[a-z]$/))
							flag[0] = 1;
						else if (password.value[index].match(/^[A-Z]$/))
							flag[1] = 1;
						else if (password.value[index].match(/^[1-9]$/))
							flag[2] = 1;
						else
							flag[3] = 1;
					}
				}
				
				if (flag[0] == 1 && flag[1] == 1 && flag[2] == 1 && flag[3] == 1)
					error.innerHTML = "";
				else
				{
					error.value= "8-18 length atleast 1 uppercase,number, special";
					pass.focus();
				}
			}

			function validateConfirmPwd() 
			{
				var password = document.getElementById("pass");
				var confirm = document.getElementById("confirm_pass");
				var error = document.getElementById("confirm_password_error");
				
				if (password.value == confirm.value) 
				{
					error.value = "";
				}
				else
				{ 
					error.value = "Passwords do not match";
					confirm_pass.focus();
				}
			}

			function validate() 
			{  
				if(document.getElementById("name").value ==" " || document.getElementById("email").value ==" " || document.getElementById("pass").value ==" " || document.getElementById("confirm_pass").value== " ")
				{
					alert("Fill required fields");
				}
			   
				
			}
		</script>
	</head>

	<body >
		<header>
			<div class="department">
				<em>WELCOME TO OUR WEBSITE</em>	
			</div>
			<div class="container">
				<div id="branding">
					<a href="http:localhost/Project/html/home.html">
						<h1>
							Cyber Crime Cell
						</h1>
					</a>
				</div>
			</div>
		</header>
		<section>
			
			<div class="container">
				<form class="box2" method="post" action="createacc_user_valid.php " onsubmit="alert('Fill required fields');">
					<h1>
						User Create Account
					</h1>
					<br />
					<input type="text" name="name" placeholder="name" id="name" onchange="validateName();" /><br/>
					<input style="color: red; margin: 0px auto;; border: none; padding: 0;" type="text" name="error" placeholder="" id="name_error" value=" " onfocus="this.blur();" /><br/>
					<input type="text" name="email" placeholder="email id"  id="email" onblur="validateEmail();"/><br/>
					<input style="color: red; margin: 0px auto; border: none; padding: 0;" type="text" name="error" placeholder="" id="email_error" value=" " onfocus="this.blur();"  /><br/>
					<input type="password" name="password" placeholder="password" id="pass" onchange="validatePwd();" /><br/>
					<input style="color: red; margin: 0px auto; border: none; padding: 0; width: 290px" type="text" name="error" placeholder="" id="password_error" value=" "  onfocus="this.blur();" /><br/>
					<input type="password" name="cpassword" placeholder="confirm password" id="confirm_pass" onchange="validateConfirmPwd();" />
					<br/>
					<input style="color: red; margin: 0px auto;; border: none; padding: 0;" type="text" name="error" placeholder="" id="confirm_password_error" value=" "  onfocus="this.blur();"  />	<br/>				
					<input type="submit" name="submit" value="Create" /><br/>
					<a href="http://localhost/Project/loginacc.php" style="color: white;">Existing Account?</a>
				</form>
			</div>
		</section>
	</body>
</html>