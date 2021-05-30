<?php
	session_start();
	require_once './includes/config.php';

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$contact = trim($_POST['contact']);
		$full_name = trim($_POST['full_name']);
		$email = NULL;
		$mobile = NULL;
		$result = null;


		if(is_numeric($contact))
		{
			$mobile = trim($contact);
		}
		else
		{
			$count = explode('@', $contact);

			if ($count == 2) {
				# code...
				$email = trim($contact);
			}
		}

		if(isset($email))
		{
			$result = mysqli_query($db, "INSERT INTO user(email, full_name, username, password) VALUES('$email', '$full_name', '$username', '$password')") or die("Query Error");	
		}
		elseif (isset($mobile))
		{
			$result = mysqli_query($db, "INSERT INTO user(mobile_number, full_name, username, password) VALUES($mobile, '$full_name', '$username', '$password')") or die("Query Error");		
		}

		if($result)
		{
			echo "<h1>Registration step successful..</h1>";
		}


			
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Instagram</title>
	<link rel="stylesheet" type="text/css" href="./css/signup.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<main class="signup-main">
		<form method="POST" action="signup.php">
			<img src="./images/instalogo.png">

			<p>
				Sign up to see photos and videos from your friends.
			</p>

			<button class="btn-FBLogin" type="button" role="button">
				<i class="fa fa-facebook-square"></i>
				Log in with Facebook
			</button>

			<br>OR <br>

			<input type="text" name="contact" placeholder="Mobile Number or Email" required="">
			<input type="text" name="full_name" placeholder="Full Name" required="">
			<input type="text" name="username" placeholder="Username" required="">
			<input type="Password" name="password" placeholder="Password" required="">

			<input type="submit" value="Sign Up" name="">
		</form>

		<div class="signup-suggestion">
				<p>Aldready Have an account?</p>&nbsp; <a href="login">Sign in</a>
		</div>

		<p>Get The App</p>

		<div class="downloadapp-suggestion">
			<img src="./images/google_play_suggestion.png">
			<img src="./images/app_store_suggestion.png">
		</div>

	</main>

</body>
</html>