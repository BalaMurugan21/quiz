var ajaxRequest;  // The variable that makes Ajax possible!
var ajaxRequest1;  // The variable that makes Ajax possible!	
try{
	// Opera 8.0+, Firefox, Safari
	ajaxRequest = new XMLHttpRequest();
	ajaxRequest1 = new XMLHttpRequest();
} catch (e){
	// Internet Explorer Browsers
	try{
		ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		ajaxRequest1 = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try{
			ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			ajaxRequest1 = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e){
			// Something went wrong
			alert("Your browser broke!");			
		}
	}
}

function check_login()
{			
	var user=document.getElementById('user1').value; 
	var pass=document.getElementById('pass1').value; 
	 ajaxRequest.onreadystatechange = function(){
	 if(ajaxRequest.readyState == 4){			
				var ajaxDisplay = document.getElementById('login_status');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;											
		}
	}
	var queryString = "?user=" + user+"&pass="+pass;
	ajaxRequest.open("GET", "ajax/check_login.php" + queryString, true);	
	ajaxRequest.send(); 
	return false;	
}

function logout()
{
	ajaxRequest.open("ajax/logout.php");
}
function stud_login()

{
	var user1=document.getElementById('user2').value; 
	var pass1=document.getElementById('pass2').value; 
	 ajaxRequest.onreadystatechange = function(){
	 if(ajaxRequest.readyState == 4){			
				var ajaxDisplay = document.getElementById('stud_status');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;											
		}
	}
	var queryString1 = "?user1=" + user1+"&pass1="+pass1;
	ajaxRequest.open("GET", "ajax/stud_login.php" + queryString1, true);	
	ajaxRequest.send(); 
	return false;	

}


function admin_login()

{
	var user1=document.getElementById('adminu').value; 
	var pass1=document.getElementById('adminp').value; 
	 ajaxRequest.onreadystatechange = function(){
	 if(ajaxRequest.readyState == 4){			
				var ajaxDisplay = document.getElementById('stud_status');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;											
		}
	}
	var queryString1 = "?adminu=" + adminu+"&adminp="+adminp;
	ajaxRequest.open("GET", "ajax/admin_login.php" + queryString1, true);	
	ajaxRequest.send(); 
	return false;	

}
