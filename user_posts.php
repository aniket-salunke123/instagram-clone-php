<?php
	include "./includes/config.php";

	$result = mysqli_query($db, "SELECT * FROM post WHERE user_id = 1");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div class="container">

		<?php
			while(mysqli_fetch_assoc($result))
			{
				print()
			}
		?>
	</div>

</body>
</html>