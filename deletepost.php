<?php
	include 'db.php';
	$post_id = $_REQUEST['post_id'];

	$query = "DELETE FROM rideinfo WHERE rideinfo_id = $post_id";

	if ($conn->query($query) === TRUE) {
    	$message =  "Record deleted successfully";
    	header('Location : dashboard.php');
	} else {
    	$messgae = "Error deleting record: " . $conn->error;
	}
?>