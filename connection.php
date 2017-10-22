<?php

	$conn = new mysqli("localhost", "elective3", "elective3", "elective3");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>