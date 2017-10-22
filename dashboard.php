<?php

	$conn = new mysqli("db4free.net:3306/elective3", "elective3", "elective3", "elective3");

	if ($conn->connect_error) {

	    die("Connection failed: " . $conn->connect_error);

	}

	$query = "SELECT first_name, last_name, region, division, district, school_name, school_id FROM teacher WHERE teacher_id=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("i", $_SESSION['teacher_id']);
	$stmt->execute();
	$stmt->execute();
	$stmt->bind_result($first_name, $last_name, $region, $division, $district, $school_name, $school_id);
	$stmt->fetch();
	$stmt->close();

	$query = "SELECT * FROM student";
	$result = $conn->query($query);
	$row = $result->fetch_array(MYSQLI_NUM);
	$result->free();
?>
