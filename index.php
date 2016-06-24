<?php
  require_once('conn/conn.php');
  ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>CODE BLITZ</title>
		
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
		
			<!-- Top Navigation -->
				<div >
<h1 align="center" style="color:white;font-family:Tw Cen MT;">LOGIN</h1>
					<section class="main">
				<form class="form-3" method="post" action="quiz.php">
				    <p class="clearfix">
				        <label for="login">Email-ID</label>
				        <input type="text"  id="user1" placeholder="Email ID" required>
				    </p>
				     <p class="clearfix">
				        <label for="login">Team Name</label>
				        <input type="text"  id="pass1" name="team" placeholder="Team Name" required>
				    </p>
				   
				   
				    
				    <p class="clearfix">
				       <center> <input type="button" value="Sign in" onclick="check_login();" ></center>
				    </p>

				</form>​
				  <div id="login_status"></div>
				     <div><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></div>       

			

		
				</div>
			
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
		<script src="ajax/script.js"></script>

	</body>
</html>



