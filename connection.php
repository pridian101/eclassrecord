<?php

	$conn = new mysqli("db4free.net:3306/elective3", "elective3", "elective3", "elective3");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>
