<?php
	$f_name = $_REQUEST["firstname"];
	$l_name = $_REQUEST["lastname"];
	$contact = $_REQUEST["mobile"];
	$userpass = $_REQUEST["pass"];

	include 'db.php';

	$query = "INSERT INTO UserInfo (first_name, last_name, mobile, password) VALUES ('$f_name','$l_name','$contact','$userpass')
	";

	if($conn -> query($query) === TRUE) {
		header('Location: dashboard.php');
	}
	else {
		echo "Error: In Storing Data" .$sql. "<br>" . $conn->error; 
	}
	$conn -> close();
?>