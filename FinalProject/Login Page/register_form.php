<?php 
@include 'config.php';
if(isset($_POST['submit'])){

	$name =mysqli_real_escape_string($conn, $_POST['name']);
	$email =mysqli_real_escape_string($conn, $_POST['email']);
	$pass= md5($_POST['password']);
	$cpass =md5($_POST['cpassword']);
	$user_type=$_POST['user_type'];

	$select= "SELECT * FROM user_form WHERE email ='$email' && password ='$pass' ";

	$result = mysqli_query($conn, $select);
	if(mysqli_num_rows($result) > 0){
		$error[]='user already exist!';
	}
	else{
		if($pass=!$cpass){
			$error[]='Password Not Matched!';
		}else{
			$insert= "INSERT INTO user_form(name,email , password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";

			mysqli_query($conn, $insert);
			header('location:login_form.php');
		}
	}
	
	

};



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Form</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form-container">
		<form action="" method="post">
			<h3>register now</h3>

			<?php
			if(isset($error)){
				foreach ($error as $error) {
					echo '<span class="error-msg">'.$error.'</span>';
				};
			};


			?>
			<input type="text" name="name" required placeholder="Enter youre name">
			<input type="email" name="email" required placeholder="Enter youre email">
			<input type="password" name="password" required placeholder="Enter your password">
			<input type="password" name="cpassword" required placeholder="confirm youre password">

			<select name="user_type">
				<option value="user">user</option>
				<option value="admin">admin</option>
			</select>
			<input type="submit" name="submit" value="register now" class="form-btn">
			<p>already have an account <a href="login_form.php">Login now</a></p>
		</form>
	</div>
</body>
</html>