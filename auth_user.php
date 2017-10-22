<?php

	session_start();

	$conn = new mysqli("db4free.net:3306/elective3", "elective3", "elective3", "elective3");

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	extract($_POST);
	$query = "SELECT user_id, password FROM users WHERE username=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$stmt->bind_result($uid, $hashedpwd);
	$stmt->fetch();
	$stmt->close();
	//verify hashed password

	if (password_verify($password, $hashedpwd)) {
		var_dump($uid);
		$teacher = "SELECT teacher_id FROM teacher WHERE user_id=?";
		$stmt = $conn->prepare($teacher);
		$stmt->bind_param("i", $uid);
		$stmt->execute();
		$stmt->bind_result($teacher_id);
		$_SESSION['teacher_id'] = $stmt->fetch();
		$stmt->close();
		//header("Location: index.php");
		var_dump($_SESSION['teacher_id']);
	} else {
		header("Location: login.php");
	}

?>
