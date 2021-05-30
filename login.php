 <?php
	session_start();
	include "./includes/config.php";

	if(isset($_SESSION['logged_in_user']))
	{
		header("location: temp_index.php");
	}
	else
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
		# code...
			$username = $_POST['username'];
			$password = $_POST['password'];


			$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' and password = '$password'");

			if(mysqli_num_rows($result) > 0)
			{
				$id = mysqli_fetch_assoc($result);
				$_SESSION['logged_in_user']= $id['user_id'];
				header("location: ./temp_index.php");
			}
			else
			{
				echo "<script>alert('Invalid Username or password');</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Instagram</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<main class="login-main">
		<div class="photo-div">
			<img src="./images/insta-login-mobile.png">
		</div>

		<div class="form-div">
			<form method="POST">
				<img src="./images/instalogo.png">

				<input type="text" name="username" placeholder="Phone number, username or email">

				<input type="Password" name="password" placeholder="Password">

				<input type="submit" name="" value="Log in">
				OR
				<a href=# class="fb-link"><i class="fa fa-facebook-square">&nbsp;&nbsp;</i>Login with Facebook</a>
				<a href="#">Forgot Password?</a>
			</form>

			<div class="signup-suggestion">
				<p>Don't have an account?</p>&nbsp; <a href="register">Sign up</a>
			</div>

			Get The App

			<div class="downloadapp-suggestion">
				<img src="./images/google_play_suggestion.png">
				<img src="./images/app_store_suggestion.png">
			</div>
		</div>
	</main>
</body>
</html>