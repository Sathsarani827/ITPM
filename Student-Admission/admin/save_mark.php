<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = $_POST['name'];
		$ca = $_POST['ca'];
		$mid = $_POST['mid'];
		$end = $_POST['end'];
		
		mysqli_query($conn, "INSERT INTO `grade` VALUES('', '$name', '$ca', '$mid', '$end')") or die(mysqli_error());
		header("location: marks.php");
	}
?>