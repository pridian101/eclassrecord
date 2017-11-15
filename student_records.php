
<?php

	/**
	* Provides CRUD functions for students.php
	*/
	class Student
	{

		function __construct()
		{
			session_start();
			// Create connection
			$this->conn = new mysqli("localhost", "elective3", "elective3", "elective3");

			// Check connection
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}

		}

		public function addGradeSection()
		{
			extract($_POST);

			$addGrade = $this->conn->prepare("INSERT INTO grade (teacher_profile_id, grade) VALUES (?, ?)");
			$addGrade->bind_param("ii", $teacher_id, $grade);
			if(!$addGrade->execute())
			{
				var_dump($addGrade->error);
			}
			$grade_id = $addGrade->insert_id;

			$addSection = $this->conn->prepare("INSERT INTO section (grade_id, section) VALUES (?, ?)");
			$addSection->bind_param("is", $grade_id, $section);
			if(!$addSection->execute())
			{
				var_dump($addSection->error);
			}
			$addGrade->close();
			$addSection->close();
		}

		public function CreateRecord($section, $lrn, $first_name, $middle_name, $last_name)
		{
			$stmt = $this->conn->prepare("INSERT INTO stuent (section, lrn, first_name, middle_name, $last_name) VALUES (?, ?, ?, ?, ?");
			$stmt->bind_param("iisss", $section, $lrn, $first_name, $middle_name, $last_name);
			if(!$stmt->execute())
			{
				var_dump($stmt->error);
			}

		}
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		extract($_POST);
		if ($_POST['create'] === 'grade') {
			$grade = new Student();
			$grade->addGradeSection();
		}
	}

?>
