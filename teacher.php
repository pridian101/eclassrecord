<?php

	/**
	* Provides CRUD functions for teacher_profile.php
	*/
	class Teacher
	{

		function __construct()
		{
			// Create connection
			$this->conn = new mysqli("db4free.net:3306/elective3", "elective3", "elective3", "elective3");

			// Check connection
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}

		}

		//FUTURE DEVELOPMENT - INPUT SANITATION 
		/*public function SanitizeInput()
		{
			extract($_POST);

			$this->first_name = filter_var($first_name, FILTER_SANITIZE_STRING);
			$this->last_name = filter_var($last_name, FILTER_SANITIZE_STRING);
			$this->region = filter_var($region, FILTER_SANITIZE_STRING);
			$this->division = filter_var($division, FILTER_SANITIZE_STRING);
			$this->district = filter_var($district, FILTER_SANITIZE_STRING);
			$this->school_name = filter_var($school_name, FILTER_SANITIZE_STRING);
			
			if (!filter_var($school_id, FILTER_VALIDATE_INT)===false) {
				$this->school_id = $school_id;
			} else {
				return "Invali Input";
			}
			
		}*/

		public function CreateUser($username, $password) // Insert new user into DB
		{
			// FUTURE DEVELOPMENT - HASH PASSWORD - TRY CATCH EXECUTE - check username
			$stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
			$hpassword = password_hash($password, PASSWORD_DEFAULT);
			$stmt->bind_param("ss", $username, $hpassword);
			if ($stmt->execute()) {
				return mysqli_insert_id($this->conn);
			} else {
				echo $stmt->error;
			}
			
			;
			
			$stmt->close();
		}

		public function CreateProfile($first_name, $last_name, $region, $division, $district, $school_id, $school_name, $user_id)
		{
			$stmt = $this->conn->prepare("INSERT INTO teacher (first_name, last_name, region, division, district, school_id, school_name, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("sssssssi", $first_name, $last_name, $region, $division, $district, $school_id, $school_name, $user_id);
			if($stmt->execute())
			{
				$_SESSION['teacher_id'] = mysqli_insert_id($this->conn);
				header("Location: index.php");
			} else{
				echo "seems like an error";
			}
		}
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		extract($_POST);
		$user = new Teacher();
		$user_id = $user->CreateUser($username, $password);
		$user->CreateProfile($first_name, $last_name, $region, $division, $district, $school_id, $school_name, $user_id);
	}

?>
