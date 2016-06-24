<?php
	session_start();
	require_once('conn.php');
	$user=$_SESSION['username'];
	$team=$_SESSION['mail'];
	unset($_SESSION['username']);
	unset($_SESSION['type']);
	
	unset($_SESSION['name']);

	$date_time=date("Y-m-d h:i:s a");
	$ip=$_SERVER['REMOTE_ADDR'];
	$sql0=mysql_query("INSERT INTO blitz_log VALUES ('','$team','$user','$date_time','Logged Out')") or die(mysql_error());
    
	session_destroy();
	header('Location:../index.php');
?>