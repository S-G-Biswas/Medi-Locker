<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Create-Account
					</span>
				</div>

				<form class="login100-form validate-form" action="account.php" method="post">
					
				   
				   <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Name </span>
						<input class="input100" type="text" name="u_name" placeholder="Enter Your Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="u_email" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="u_password" placeholder="Enter Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" name="u_phone" placeholder="Enter Phone ">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">State</span>
						<input class="input100" type="text" name="u_state" placeholder="Enter State">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">city</span>
						<input class="input100" type="text" name="u_city" placeholder="Enter City">
						<span class="focus-input100"></span>
					</div>


                   <br>
				   <br>
				   <br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Create
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	


</body>
</html>