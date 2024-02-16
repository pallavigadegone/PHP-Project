<?php 

include("includes/connection.php");
//error_reporting(0);
$output = "";

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
		}else{
			$output .= "Failed to register";
		}
	}
}

//login
if (isset($_POST['login'])) {
  	   
	$uname = $_POST["uname"];
	$pass = $_POST["pass"];
    $role = $_POST['role'];
	if (empty($uname)) {
		
	}else if(empty($pass)){

	}else if(empty($role)){

	}else{

	$query = "SELECT * FROM users WHERE username='$uname' AND role='$role' AND password='$pass'";
	//$query =  "select * from customer where cname='".$uname."' AND password='".$password."' AND  role='".$role."';

	$res = mysqli_query($connect,$query);

	if (mysqli_num_rows($res) == 1) {

		  if ($role == "Admin"){

				$_SESSION['admin'] = $uname;
				header("Location:http://localhost/travel/UK/admin.php");
			  
		   }else if($role == "Tourist"){
		   		session_start();
		    	$_SESSION['tourist'] = $uname;
		   		header("Location:http://localhost/travel/UK/tourist1.php");
		 
		   }else if($role == "Hotel"){
		   
				$_SESSION['hotel'] = $uname;
				header("Location:http://localhost//travel/UK/house%20management/admin.php");

		   }else if($role == "Homestay"){
		   
				$_SESSION['homestay'] = $uname;
				header("Location:http://localhost//travel/UK/house%20management/admin.php");
				
		   }else if($role == "Taxi"){
		   
				$_SESSION['Taxi'] = $uname;
				header("Location:http://localhost//travel/UK/Vehicle-Management/admin.php");
		}
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
  <title>Login</title>
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
								<option value="" >Selete Role</option>
								<option value="Tourist">Tourist</option>
								<option value="Taxi">Taxi</option>
								<option value="Hotel">Hotel</option>
								<option value="Hotel">Homestay</option>

								
							</select>
							</div>
							<div class="input-group">
								<i class='bx bx-mail-send'></i>
								<input type="email" label for="email" placeholder="Enter email" name="email" required>
							</div>
							<div class="input-group">
								<i class='bx bx-mail-send'></i>
						    <input type="number" id="phone" label for="Enter mobile number"  placeholder="Mobile Number" name="mnumber" length="10"required>
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
							<input type="text" placeholder="Username" name="uname" required>
						</div>
						
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password" name="pass" required>
						</div>
						<div class="input-group">
							
							<select name="role" class="form-control my-2" style="width:400px; height:40px;border:0" required>
							<option value="" >Select Role</option>
							<option value="Tourist">Tourist</option>
							
							<option value="Taxi">Taxi</option>
							<option value="Hotel">Hotel</option>
							<option value="Hotel">Homestay</option>

						</select>
						</div>

						<button name="login" value="login">
						<a>Login</a>
						</button>
						<p>
							<b>
								<h5><a href="admin_login.php">Admin login</a></h5>
							</b>
						</p>
						<p>						</p>
						<span>
            <a class="button" href="forgetpass.html">Forget Password</a>
                 </span>
				 
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>
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
