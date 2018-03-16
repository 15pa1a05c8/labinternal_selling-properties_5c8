<?php 
include('server.php'); 
if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
	

		
		if(empty($username)){
			array_push($error,"Username is required");
		}
		if(empty($email)){
			array_push($error,"Email is required");
		}
		if(empty($password1)){
			array_push($error,"password is required");
		}
		if($password1 != $password2){
			array_push($error," passwords not matched,Try again");
		}
			if(count($error) == 0){
			$password = ($password1);
			$sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);
			
			header('location:login.php');
		}
		
	}
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="c">
		<h2>Register</h2>
	
	
	<form method="post" action="register.php">
		<?php include('error.php'); ?>
		<div class="input">
			<label>Username</label>
			<input type="text" name="username" placeholder="Your name" value="<?php  $username; ?>">
		</div>
		<div class="input">
			<label>Email</label>
			<input type="text" name="email" placeholder="Your Email" value="<?php  $email; ?>">
		</div>
		<div class="input">
			<label>Password</label>
			<input type="password" name="password1" placeholder="Your password">
		</div>
		<div class="input">
			<label>Confirm password</label>
			<input type="password" name="password2" placeholder="Confirm password">
		</div>
		<div class="input">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>
