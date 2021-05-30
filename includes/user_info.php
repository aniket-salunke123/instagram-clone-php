<?php
	
	session_start();

	include('config.php');

	/*
		creating a class user which fetches all the information about the user from the database by providing a user id to it

	*/

	/**
	 * user_class is a class contains every information about the user
	*/
	class user_class
	{

		// $user_id = "" 	#user id provided by script to the class
		private $user_mobile_number = "";
		private $user_email ="";
		private $user_full_name = "";
		private $user_username = "";
		private $user_password = "";
		private $user_date_registred ="";
		private $user_profile_pic = ""; 

		public $ROOT_PATH_PROFILE = "./user_contents/user_profilepics/";
		


		function __construct($user_id)
		{
			include("config.php");
			$result = mysqli_query($db, "SELECT * FROM user WHERE user_id=$user_id") or die("Selection Query Error");
			$row = mysqli_fetch_assoc($result);

			$this->user_mobile_number = $row['mobile_number'];
			$this->user_email = $row['email'];
			$this->user_full_name = $row['full_name'];
			$this->user_username = $row['username'];
			$this->user_password = $row['password'];
			$this->user_date_registred = $row['date_registred'];
			$this->user_profile_pic = $this->ROOT_PATH_PROFILE.$row['profile_pic'];


		}

		public function get_user_mobile_number()
		{
			# code...
			return $this->user_full_name;
		}

		public function get_user_user_email()
		{
			# code...
			return $this->user_email;
		}

		public function get_user_full_name()
		{
			# code...
			return $this->user_full_name;
		}

		public function get_user_profile_pic()
		{
			# code...
			return $this->user_profile_pic;
		}

		public function get_user_username()
		{
			# code...
			return $this->user_username;
		}
	}

	// $USER = new user_class(1);

?>