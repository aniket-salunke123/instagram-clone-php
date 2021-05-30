<?php
	
	// Main Database Configuration file for connection, storing and fetching data from database

	$HOST = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DBNAME = "instaclone";

	$db = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DBNAME) or die("Error in database connection");
	GLOBAL $db;
	// $db is the global object / handeler to acess the database


	
	// if ($db) {
	// 	echo "<h1>Database Connected Successfully...</h1>";
	// }

?>

