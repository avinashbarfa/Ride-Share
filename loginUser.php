<?php
	include ('db.php');
	session_start();
	if($_SERVER['REQUEST_METHOD']=="POST" && !empty($_POST['username']) && !empty($_POST['pass']))
	{
		$session_id=mysqli_real_escape_string($conn,$_POST['username']);
		$session_pass=mysqli_real_escape_string($conn,$_POST['pass']);

		$sql ="SELECT userid FROM UserInfo WHERE mobile ='$session_id' and password='$session_pass'";

		$fetch=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($fetch,MYSQLI_ASSOC);
		$active = $row['active'];
		$count= mysqli_num_rows($fetch);
		if($count == 1)
		{
			$_SESSION['login_user']=$session_id;
			header("Location: dashboard.php");
		}
		else
		{
			echo "password not match";
		}
	}
	else
	{
		echo "Error In login";
	}
	$conn -> close();
?>