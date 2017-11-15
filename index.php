<?php

	// session_start();
	// if (!isset($_SESSION['teacher_id'])) {
	// 	header("Location: login.php");
	// } 
error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	include 'dashboard.php';
	include 'misc/header.php';

	include 'students.php';

	include 'misc/footer.php' 

?>