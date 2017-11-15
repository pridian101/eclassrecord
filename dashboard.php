<?php

	include 'connection.php';
	$uid = 30;
	$query = "SELECT first_name, last_name, region, division, district, school_name, school_id FROM teachers WHERE teacher_id=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("i", $uid);
	$stmt->execute();
	$stmt->bind_result($first_name, $last_name, $region, $division, $district, $school_name, $school_id);
	$stmt->fetch();
	$stmt->close();

	$grade = $conn->prepare("SELECT grade_id, grade FROM grade_levels WHERE teacher_id=?");
	$grade->bind_param("i", $uid);
	$grade->execute();
	$grades=$grade->fetch();
?>
