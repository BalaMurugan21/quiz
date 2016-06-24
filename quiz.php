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
{echo $row['team'];}}?></title></title>
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<style type="text/css">


.button{
	position: absolute;
	bottom: 20px;
	left: 500px;
	    background-color: #FF1744; /* Green */
    border: none;
    color: white;
    height: 50px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


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
		  -webkit-animation-duration: 1s;
        -webkit-animation-name: glow;
        -webkit-animation-direction: alternate;
        -webkit-animation-iteration-count: infinite;
        animation-duration: 1s;
        animation-name: glow;
        animation-direction: alternate;
        animation-iteration-count: infinite;

}
 @-webkit-keyframes glow {
        from { text-shadow: 0 0 0px red; }
        to { text-shadow: 0 0 20px blue; }
    }

.comp{
	position: relative;
	left: 300px;
}
.comp h3{
color: black;
}

.containe{
	position: relative;
		top: 30px;
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

.timer{
	position: fixed;
	font-size: 4em;
	top: 300px;
	left:20px;
	color: white;
}

   .glow {
position: fixed;
      top: 250px;
      left: 20px;
      color: white;
        -webkit-animation-duration: 1s;
        -webkit-animation-name: glow;
        -webkit-animation-direction: alternate;
        -webkit-animation-iteration-count: infinite;
        animation-duration: 1s;
        animation-name: glow;
        animation-direction: alternate;
        animation-iteration-count: infinite;
      
    }
 .days {
  float: left;
  margin-right: 4px;
}
.hours {
  float: left;
}
.minutes {
  float: left;
}
.seconds {
  float: left;
}
.clearDiv {
  clear: both;
}

		</style>
	</head>
	<body onunload="ajaxFunction()">
<header>PERSPICACIOUS 2k16</header>
				<div class="containe">		
		<div class="title"><center><p>CODE BLITZ</p></center></div>
		

<p><div class="glow">You will be automatically<br> logged out after 20minutes.</div>
  <div class="timer" data-seconds-left="1200"> </div>
</p>
		
			<!-- Top Navigation -->
			
			

			<div class="comp">
				
				<form action="end.php" method="post"><table>
					

						<p><h3>1.What will be output if you will compile and execute the following c code?<br>

void main(){<br>
   int i=320;<br>
   char *ptr=(char *)&i;<br>
   printf("%d",*ptr); <br>
}
</h3>	<h4>Options:</h4>				
<font color="white">		<input type="radio" name="s1" value="360" required>&nbsp360<br>
						<input type="radio" name="s1" value="120" required>&nbsp120<br>
						<input type="radio" name="s1" value="64" required>&nbsp64<br>
						<input type="radio" name="s1" value="Compilation error" required>&nbspCompilation error<br></font>
						

						 <p><h3>2. What will be output if you will compile and execute the following c code?<br>

void main(){<br>
char c=125;<br>
    c=c+10;<br>
    printf("%d",c);<br> 
}<br>
</h3></p>
						 
						<font color="white">	
						 <input type="radio" name="s2" value="135" required>&nbsp135 <br>
						 <input type="radio" name="s2" value="-121" required>&nbsp-121 <br>
						 <input type="radio" name="s2" value="+INF" required>&nbsp+INF <br>
						 <input type="radio" name="s2" value="Compilation error" required>&nbspCompilation error <br></font>
						 
						 <p><h3>3. What will be output if you will compile and execute the following c code?<br>
struct marks{<br>
  int p:3;<br>
  int c:3;<br>
  int m:2;<br>
};<br>
void main(){<br>
  struct marks s={2,-6,5};<br>
  printf("%d %d %d",s.p,s.c,s.m);<br> 
}<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s3" value="2 -6 5" required>&nbsp2 -6 5 <br>
						 <input type="radio" name="s3" value="2 -6 1" required>&nbsp2 -6 1 <br>
						 <input type="radio" name="s3" value="2 2 1" required>&nbsp 2 2 1 <br>
						 <input type="radio" name="s3" value="Compiler error" required>&nbspCompiler error <br></font>
						 
						 <p><h3>4. What will be output if you will compile and execute the following c code?<br>
void main(){<br>
   int a=25;<br>
   clrscr();<br>
   printf("%o %x",a,a);<br>
   getch();<br>
}<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s4" value="25 25" required>&nbsp25 25 <br>
						 <input type="radio" name="s4" value="025 0x25" required>&nbsp025 0x25 <br>
						 <input type="radio" name="s4" value="12 42" required>&nbsp12 42 <br>
						 <input type="radio" name="s4" value="31 19" required>&nbsp31 19 <br></font>
	
						 <p><h3>5. Study the following 'C' program<br>
	

void main()<br>
{<br>
    static a,b;<br>
    while(a > b++)<br>
}<br>

What will be the value of a and b?<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s5" value="a=0,b=1" required>&nbspa=0,b=1 <br>
						 <input type="radio" name="s5" value="a=0,b=0" required>&nbspa=0,b=0 <br>
						 <input type="radio" name="s5" value="a=1,b=1" required>a=1,b=1 <br>
						 <input type="radio" name="s5" value="None of these" required>None of these <br></font>
						 
						 <p><h3>6. Consider the following program fragment<br>
switch(input)<br>
{<br>
    case '1':<br>
        printf("One");<br>
    case '2':<br>
        printf("Two");<br>
    case '3':<br>
        printf(""Three");<br>
    default:<br>
        Printf("Default");<br>
        break;<br>
}<br>

What will be printed when input is 2?<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s6" value="Two Three Default" required>&nbspTwo Three Default <br>
						 <input type="radio" name="s6" value="Two" required>&nbspTwo <br>
						 <input type="radio" name="s6" value="Two Default" required>&nbspTwo Default <br>
						 <input type="radio" name="s6" value="Two Two Default" required>&nbspTwo Two Default <br></font>
						 
						 <p><h3>7.What will be printed when this program is executed? <br>
int f(int x)<br>
{<br>
   if(x <= 4)<br>
      return x;<br>
   return f(--x);<br>
}<br>
void main()<br>
{<br>
   printf("%d ", f(7));<br> 
}<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s7" value="4 5 6 7" required>&nbsp4 5 6 7 <br>
						 <input type="radio" name="s7" value="1 2 3 4" required>&nbsp1 2 3 4 <br>
						 <input type="radio" name="s7" value="4" required>&nbsp4 <br>
						 <input type="radio" name="s7" value="Syntax error" required>&nbspSyntax error <br></font>
						 
						 <p><h3>8.The recursive functions are executed in a ........... <br></h3></p>
							<font color="white">
						 <input type="radio" name="s8" value="Parallel order" required>&nbspParallel order <br>
						 <input type="radio" name="s8" value="First In First Out order" required>&nbspFirst In First Out order <br>
						 <input type="radio" name="s8" value="Last In First Out order" required>&nbspLast In First Out order <br>
						 <input type="radio" name="s8" value="Iterative order" required>&nbspIterative order <br></font>
						 
						 <p><h3>9. char* myfunc(char *ptr)<br>
{<br>
   ptr+=3;<br>
   return(ptr);<br>
}<br>

void main()<br>
{<br>
   char *x, *y;<br>
   x = "EXAMVEDA";<br>
   y = myfunc(x);<br>
   printf("y=%s", y);<br>
}<br>
What will be printed when the sample code above is executed? <br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s9" value="y=EXAMVEDA" required>&nbspy=EXAMVEDA <br>
						 <input type="radio" name="s9" value="y=MVEDA" required>&nbspy=MVEDA <br>
						 <input type="radio" name="s9" value="y=VEDA" required>&nbspy=VEDA <br>
						 <input type="radio" name="s9" value="y=EDA" required>&nbspy=EDA <br></font>
						 
						 <p><h3>10. What will be the output? <br>
main() <br>
{ <br>
      char *p; <br>
      p = "Hello"; <br>
      printf("%cn",*&*p);<br> 
}<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s10" value="Hello" required>&nbspHello <br>
						 <input type="radio" name="s10" value="H" required>&nbspH <br>
						 <input type="radio" name="s10" value="Some address will be printed" required>&nbspSome address will be printed <br>
						 <input type="radio" name="s10" value="None of these"  required>&nbspNone of these <br></font>
						 
						 <p><h3>11. Find the output of the following program. <br>
void main()<br>
{<br>
   int array[10];<br>
   int *i = &array[2], *j = &array[5];<br>
   int diff = j-i;<br>
   printf("%d", diff);<br>
}<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s11" value="3" required>&nbsp3 <br>
						 <input type="radio" name="s11" value="6" required>&nbsp6 <br>
						 <input type="radio" name="s11" value="Garbage value" required>&nbspGarbage value <br>
						 <input type="radio" name="s11" value="Error" required>&nbspError <br></font>
						 
						 <p><h3>12.<br>main()<br>
{<br>
char s[ ]="man";<br>
int i ;<br>
for(i=0;s[ i];i++)<br>
printf("\n%c%c%c%c",s[i],*(s+i),*(i+s),i[s]);<br>
}<br>
</h3></p>
							<font color="white">
						 <input type="radio" name="s12" value="mmmm aaaa nnnn" required>&nbspmmmm <br>&nbsp&nbsp&nbsp&nbsp&nbspaaaa<br>&nbsp&nbsp&nbsp&nbsp&nbspnnnn <br>
						 <input type="radio" name="s12" value="mmm aaa nnn" required>&nbspmmm <br>&nbsp&nbsp&nbsp&nbsp&nbspaaa<br>&nbsp&nbsp&nbsp&nbsp&nbspnnn <br>
						 <input type="radio" name="s12" value="nnn aaa mmmm" required>&nbspnnn <br>&nbsp&nbsp&nbsp&nbsp&nbspaaa<br>&nbsp&nbsp&nbsp&nbsp&nbspmmmm <br>
						 <input type="radio" name="s12" value="aaa mmm nnnnn" required>&nbspaaa <br>&nbsp&nbsp&nbsp&nbsp&nbspmmm<br>&nbsp&nbsp&nbsp&nbsp&nbspnnnnn <br>
						 </font>
						 <p><h3>13.main()<br>
{<br>
extern int i;<br>
i=20;<br>
printf("%d",i);<br>
}<br> 
</h3></p>
							<font color="white">
						 <input type="radio" name="s13" value="20" required>&nbsp20 <br>
						 <input type="radio" name="s13" value="Linker error" required>&nbspLinker error <br>
						 <input type="radio" name="s13" value="Garbage value" required>&nbspGarbage value <br>
						 <input type="radio" name="s13" value="Compiler error" required>&nbspCompiler error <br></font>
						 
						 <p><h3>14.Predict the output or error(s) for the following:<br>
main()<br>
{<br>
int i=-1,j=-1,k=0,l=2,m;<br>
m=i++&&j++&&k++||l++;<br>
printf("%d %d %d %d %d",i,j,k,l,m);<br>
}<br>
</h3></p>
						<font color="white">
						 <input type="radio" name="s14" value="00131" required>&nbsp00131 <br>
						 <input type="radio" name="s14" value="13100" required>&nbsp13100 <br>
						 <input type="radio" name="s14" value="13001" required>&nbsp13001 <br>
						 <input type="radio" name="s14" value="13010" required>&nbsp13010 <br></font>
						 
						 <p><h3>15. What is the output of following C code? <br>
main()<br>
{<br>
   struct emp<br>
   {<br>
     char name[20];<br>
     int age;<br>
     float sal;<br>
   };<br>
   struct emp e ={"Tiger"}<br>
   printf("%d%d%f",e.age,e.sal);<br>
}<br>
</h3></p>
											<font color="white">
								 <input type="radio" name="s15" value="Error" required>&nbspError <br>
						 <input type="radio" name="s15" value="Garbage value" required>&nbspGarbage value <br>
						 <input type="radio" name="s15" value="0 0.000000" required>&nbsp0 0.000000 <br>
						 <input type="radio" name="s15" value="1 0.000000" required>&nbsp1 0.000000 <br></font>
						 



				
				<center><input class="button" type="submit" value="Submit" onclick="logout();"  name="Submit"></center><br><br>

				
			</form>
				</div>
			
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
		<script type="text/javascript">
    setTimeout(function() { window.location.href = "ajax/logout.php"; }, 60 * 20000);
</script>
<script src="js/jquery.js"></script>
<script src="js/jquery.simple.timer.js"></script>
<script>
$(function(){
    $('.timer').startTimer({
      onComplete: function(){
        console.log('Complete');
      }
    });
})
</script>
<script type="text/javascript">
function ajaxFunction()
{
var xmlHttp;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
  xmlHttp.onreadystatechange=function()
    {
    if(xmlHttp.readyState==4)
      {
      document.myForm.time.value=xmlHttp.responseText;
      }
    }
  xmlHttp.open("GET","ajax/logout.php",true);
  xmlHttp.send(null);
  }


</script>

		

	</body>
</html>

