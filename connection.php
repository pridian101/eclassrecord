<?php

	$conn = new mysqli("127.0.0.1:3306", "elective3", "elective3", "elective3");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>
