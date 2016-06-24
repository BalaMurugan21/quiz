<?php
    require_once('ajax/conn.php');
    session_start();  
   if(isset($_SESSION['username'])){$result = @mysql_query("SELECT * FROM register WHERE email='".$_SESSION["username"]."' LIMIT 1");while($row = mysql_fetch_array($result))
{}}else
{
    echo "<title>Error!</title>";
    //Doesn't have session cookie
    echo "YOU ARE NOT LOGGED IN!";
}
?><!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>  <?php if(isset($_SESSION['username'])) {$result = @mysql_query("SELECT team FROM designo WHERE email='".$_SESSION["username"]."' LIMIT 1"); 
while($row = mysql_fetch_array($result))
{echo $row['team'];}}?></title>
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<style type="text/css">
		body{
			
  background: #424242;

		}
		.watermark{
			
 position:fixed;
 bottom:5px;
 right:5px;
 opacity:0.5;
 z-index:99;
 color:black;
}
		
header
{
	top: 0;
	width: 100%;
	position: fixed;
	text-align: center;
	font-family: "Origami";
	color: black;
	font-size:5em;
	background-color:#00B0FF;
	z-index: 100;
	
}
.title{
	color: white;
		font-family: "Bauhaus 93";
		font-size: 3em;
}
.comp{
	position: relative;
	left: 20px;
}
.comp h3{
color: #EEEEEE;
}

.containe{
	position: relative;
		top: 90px;
}
#background{
    position:absolute;
    z-index:0;
    background:;
    width: 100%;
            min-height:50%; 
    min-width:100%;
  }

#content{
    position:absolute;
    z-index:1;
}

#bg-text
{
	opacity: 0.5;
    color:#9E9E9E;
    font-size:120px;
    transform:rotate(300deg);
    -webkit-transform:rotate(300deg);
}
		</style>
	</head>
	<body>
<header>PERSPICACIOUS 2k16</header>
				<div class="containe">		
		<div class="title"><center><p>CODE BLITZ</p></center></div>
		<nav class="codrops-demos">
				<center>	<a href="ajax/logout.php" style="position:absolute; right:600px; top:200px;font-size:20px;font-size:20px;">OK</a></center>
					</nav>
			<!-- Top Navigation -->
				
<h1 align="center" style="color:white;font-family:Tw Cen MT;">Submitted Successfully...!!!</h1>

<?php 

include('conn/conn.php');



$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];
	$s10 = $_POST['s10'];
$s5 = $_POST['s5'];
	$s11 = $_POST['s11'];
$s6 = $_POST['s6'];	
$s12 = $_POST['s12'];
$s7 = $_POST['s7'];
	$s13 = $_POST['s13'];
$s8 = $_POST['s8'];
	$s14 = $_POST['s14'];
$s9 = $_POST['s9'];
	$s15 = $_POST['s15'];

$a1 = "64";
$a2 = "-121";
$a3 = "2 2 1";
$a4 = "31 19";
$a5 = "a=0,b=1";
$a6 = "Two Three Default";
$a7 = "4";
$a8 = "Last In First Out order";
$a9 = "y=MVEDA";
$a10 = "H";
$a11 = "3";
$a12 = "mmmm aaaa nnnn";
$a13 = "Linker error";
$a14 = "00131";
$a15 = "0 0.000000";

if($s1=='' && $s2=='')
{
	echo ("<script>alert('Error')</script>");
	exit();
}

if ($s1==$a1) {

$w1=1;

}else{
	$w1=0;
}


if ($s2==$a2) {

$w2=1;

}else{
	$w2=0;
}

if ($s3==$a3) {

$w3=1;

}
else{
	$w3=0;
}

if ($s4==$a4) {

$w4=1;

}
else{
	$w4=0;
}

if ($s5==$a5) {

$w5=1;

}
else{
	$w5=0;
}

if ($s6==$a6) {

$w6=1;

}
else{
	$w6=0;
}

if ($s7==$a7) {

$w7=1;

}
else{
	$w7=0;
}

if ($s8==$a8) {

$w8=1;

}
else{
	$w8=0;
}

if ($s9==$a9) {

$w9=1;

}
else{
	$w9=0;
}

if ($s10==$a10) {

$w10=1;

}else{
	$w10=0;
}

if ($s11==$a11) {

$w11=1;

}
else{
	$w11=0;
}

if ($s12==$a12) {

$w12=1;

}
else{
	$w12=0;
}

if ($s13==$a13) {

$w13=1;

}
else{
	$w13=0;
}

if ($s14==$a14) {

$w14=1;

}
else{
	$w14=0;
}

if ($s15==$a15) {

$w15=1;

}
else{
	$w15=0;
}

$total=$w1+$w2+$w3+$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12+$w13+$w14+$w15;

$ans = array("64","-121","2 2 1","31 19","a=0,b=1","Two Three Default","4","Last In First Out order","y=MVEDA","H","3","mmmm aaaa nnnn","Linker error","00131","0 0.000000");



$sql="UPDATE blitz set q1='$s1',q2='$s2',q3='$s3',q4='$s4',q5='$s5',q6='$s6',q7='$s7',q8='$s8',q9='$s9',q10='$s10',q11='$s11',q12='$s12',q13='$s13',q14='$s14',q15='$s15',total='$total' WHERE email = '".$_SESSION["username"]."' ";
if(!mysql_query($sql)) {
 die();
 }



	
?>
					

			
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
		<script src="ajax/script.js"></script>

	</body>
</html>



