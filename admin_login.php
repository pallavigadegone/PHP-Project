<?php 

include("includes/connection.php");
//error_reporting(0);
$output = "";
//session_start();
//registration
if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$uname = $_POST['uname'];
	$gender = $_POST['gender'];
	$role = $_POST['role'];
	$email = $_POST['email'];
	$mnumber = $_POST['mnumber'];
	$pass = $_POST['pass'];
	$c_pass = $_POST['c_pass'];

	$error = array();

	if (empty($fname)) 
	{
		$error['error'] = "Firstname is Empty";
	}
	else if(empty($sname))
	{
		$error['error'] = "Surname is empty";
	}
	else if(empty($uname))
	{
		$error['error'] = "username is empty";
	}
	else if(empty($gender))
	{
		$error['error'] = "Select Gender";
	}
	else if(empty($role))
	{
		$error['error'] = "Select role";
	}
	else if(empty($email))
	{
		$error['error'] = "email is empty";
	}
	else if(empty($mnumber))
	{
		$error['error'] = "mobile number is empty";
	}
	else if(empty($pass))
	{
		$error['error'] = "Enter Password";
	}
	else if(empty($c_pass))
	{
		$error['error'] = "Confirm Password";
	}
	else if($pass != $c_pass)
	{
		$error['error'] = "Both password do not match";
	}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
		
		$query = "INSERT INTO users(firstname,surname,username,gender,role,email,mnumber,password) VALUES('$fname','$sname','$uname','$gender','$role','$email','$mnumber','$pass')";
		$res = mysqli_query($connect,$query);

		if ($res) {
			$output .= "You have successfully registered";
			header("Location:index.php");
		}else{
			$output .= "Failed to register";
		}
	}
}

if (isset($_POST['login'])) {
  	   
    $uname = $_POST['uname'];
    $role = $_POST['role'];
    $pass = $_POST['pass'];

    if (empty($uname)) {
        
    }else if(empty($role)){

    }else if(empty($pass)){

    }else{

    $query = "SELECT * FROM users WHERE username='$uname' AND role='$role' AND password='$pass'";
    $res = mysqli_query($connect,$query);

    if (mysqli_num_rows($res) == 1) {

          if ($role == "Admin") {

              $_SESSION['admin'] = $uname;
              header("Location: admin.php");
              
          }
         else if($role == "Tourist")
         {
           $_SESSION['Tourist'] = $uname;
           header("Location: tourist.php");
         }/*
         else if($role == "Taxi")
         {
           $_SESSION['Taxi'] = $uname;
           header("Location: taxi.php");
         }*/
         $output .= "you have logged-In";
    }else{
        $output .= "Failed to login";
    }

    }
}
 
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						<form method="POST">
						
							<div class="input-group">
									<i class='bx bxs-user'></i>
									<input type="text" placeholder="First Name" name="fname" required="required" data-validation-required-message="Please enter your first name" >
							</div>
							<div class="input-group">
									<i class='bx bxs-user'></i>
									<input type="text" placeholder="Surname" name="sname" required>
							</div>
							<div class="input-group">
									<i class='bx bxs-user'></i>
									<input type="text" placeholder="Username" name="uname" required>
							</div>
							<div class="input-group">
									
									<select name="gender" class="form-control my-2" style="width:400px; height:40px;border:0" required>
									<option value="" > GENDER</option>
									<option value="MALE">MALE</option>
									<option value="FEMALE">FEMALE</option>
								</select>
							</div>
							<div class="input-group">
								
								<select name="role" class="form-control my-2" style="width:400px; height:40px;border:0" required> 
								<option value="Admin" selected>Admin</option>
								<option value="Tourist">Tourist</option>
								
							</select>
							</div>
							<div class="input-group">
								<i class='bx bx-mail-send'></i>
								<input type="email" placeholder="Email" name="email" required>
							</div>
							<div class="input-group">
								<i class='bx bx-mail-send'></i>
								<input type="number" placeholder="Mobile Number" name="mnumber" required>
							</div> 
							<div class="input-group">
								<i class='bx bxs-lock-alt'></i>
								<input type="password" placeholder="Password" name="pass" >
							</div>
							<div class="input-group">
								<i class='bx bxs-lock-alt'></i>
								<input type="password" placeholder="Confirm password" name="c_pass">
							</div>
							<button name="register" value="register">
								Register
							</button>
							<p>
								<span>
									Already have an account?
								</span>
								<b onclick="toggle()" class="pointer">
									Sign in here
								</b>
							</p>
						</form>
					</div>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<form method="POST" >
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input name="uname" type="text" placeholder="Username" required>
						</div>
						
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input name="pass" type="password" placeholder="Password" required>
						</div>
						<div class="input-group">
							
							<select name="role" class="form-control my-2" style="width:400px; height:40px;border:0" require>
							<option value="" >Select Role</option>
							<option value="Admin" selected>Admin</option>
							<!--<option value="Tourist">Tourist</option>-->
						
							<!--<option value="Taxi">Taxi</option>-->
							
						</select>
						</div>

						<button name="login" value="login">
							Login
						</button>
					<!--	<p>
							<b>
								<h5>Admin login</h5>
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>-->
</form>
					</div>
				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome
					</h2>
	
				</div>
				<div class="img sign-in">
		
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
<!-- partial -->
  <script  src="js/login.js"></script>

</body>
</html>


