<?php
	include('db.php');
	session_start();
	if(isset($_SESSION['LoginType']))
	{
		$_SESSION['login_us']=$_SESSION['login_user'];
	}
	else
	{
		$check=$_SESSION['login_user'];
		$sql="SELECT username FROM adminrecord WHERE username='$check' ";
		$session=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($session,MYSQLI_ASSOC);
		$login_session=$row['username'];
		$_SESSION['login_us']=$login_session; 
		if(!isset($_SESSION['login_user']))
		{
	    	header("location: index.php");
		}		
	}
?>