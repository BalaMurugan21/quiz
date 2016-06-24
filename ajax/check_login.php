<?php
require_once('conn.php');
$user = $_GET['user'];
$team=$_GET['pass'];
$pass = mysql_real_escape_string($pass);
$query = "SELECT * FROM register WHERE email like '$user'";
$qry_result = mysql_query($query) or die(mysql_error());
$check="SELECT * FROM blitz WHERE email like '$user' ";
$check1 ="SELECT * FROM blitz WHERE team like '$team' ";
$qry1 = mysql_query($check1) or die(mysql_error());

$qry = mysql_query($check) or die(mysql_error());

if ($user=='' && $team=='') 
{
	echo("<h1><p style=\"color:white\" align=\"center\">Please fill the fields...</p></h1>");
	exit();
}

if ($user=='') {
	echo("<h1><p style=\"color:white\" align=\"center\">Enter Mail Id!!!</p></h1>");
	exit();
	# code...
}

if ($team=='') {
echo("<h1><p style=\"color:white\" align=\"center\">Enter Team Name!!!</p></h1>");
	exit();
	# code...
}

if(mysql_num_rows($qry1)==1)
{
	echo("<h1><p style=\"color:white\" align=\"center\">Team name you have entered is not available<br>Choose different Name.</p></h1>");
	exit();
}

if(mysql_num_rows($qry)==1)
{
	echo("<p style=\"color:white\" align=\"center\">you have finished!!!</p>");
}

else if(mysql_num_rows($qry_result)==1)
{
		session_start();
		$_SESSION['username']=$user;
		$_SESSION['mail']=$team;
		$sq=mysql_query("INSERT INTO blitz (team,email) VALUES ('$team','$user') ") or die(mysql_error());
		$date_time=date("Y-m-d h:i:s a");
		$ip=$_SERVER['REMOTE_ADDR'];
		$sql0=mysql_query("INSERT INTO blitz_log VALUES ('','$team','$user','$date_time','Logged in')") or die(mysql_error());
		$_SESSION['count']=0;
		$row=mysql_fetch_array($qry_result);
		$_SESSION['type']=$row['status'];		
		$_SESSION['name']=$row['name'];
		if($_SESSION['type']=="login"){
			header('Refresh: 0;url=quiz.php');
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=quiz.php">';
		}else{
			header('Refresh: 0;url=staff_login/index.php');
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=quiz.php">';
		}
	 
}
else
{
	echo("<h1><p style=\"color:white\" align=\"center\">Invalid Email ID!!!</p></h1>");
}	
?>