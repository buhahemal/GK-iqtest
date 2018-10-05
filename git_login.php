<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						User Login
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="user_nm" placeholder="Username">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="user_pass" placeholder="Password">
						<span class="focus-input100"></span>
						
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="Login">
							Login
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="git_register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
include("connect.php");
error_reporting(0);
session_start();
$message="";
		if(isset($_REQUEST["cancel"]))
		{
			header("Location:index.php");
		}
		if(isset($_REQUEST["Login"]))
		{
				//USERLOGIN
	
			$username=$_POST['user_nm'];
			$password=$_POST['user_pass'];
			$result=mysql_query("select * from git_user where Username='$username' and Password='$password'") or die(mysql_error());
			$row=mysql_fetch_array($result);
			if($row['Username']==$username && $row['Password']==$password)
			{
				$_SESSION["nm"] = $row[Username];
				if(isset($_SESSION["nm"])) 
				{
				header("location:index.php");
				}
			
			
			}
			else
			{
				echo "enetr right";
			}
			
			//ADMIN LOGIN
				$result1=mysql_query("select * from git_admin where Adminname='$username' and Password='$password'") or die(mysql_error());
				$row1=mysql_fetch_array($result1);
				if($row1['Adminname']==$username && $row1['Password']==$password)
				{
					$_SESSION["Ad"] = $row1[Adminname];
					if(isset($_SESSION["Ad"])) 
					{
					header("location:admin/home.php");
					}
				
				
				}
				else
				{
					$message="Inavalid User Name Or Password";
			
				}
}

?>