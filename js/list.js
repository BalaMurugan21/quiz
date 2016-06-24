function Validate()
{
var e = document.getElementById("dept");
var f = document.getElementById("yr");
var g = document.getElementById("sec");
var strUser = e.options[e.selectedIndex].value;
var str1 = e.options[e.selectedIndex].text;
var strUser1 = f.options[f.selectedIndex].value;
var str2 = f.options[f.selectedIndex].text;
var str3 = g.options[g.selectedIndex].text;


var strUser2 = g.options[g.selectedIndex].value;

//CSE DEPARTMENT
if(str1=="CSE"  && str2=="1" && str3=="A" ){
window.open('att_list/cse1a.php');
}
if(str1=="CSE"  && str2=="1" && str3=="B" ){
window.open('att_list/cse1b.php');
}

if(str1=="CSE"  && str2=="2" && str3=="A" ){
window.open('att_list/cse2a.php');
}

if(str1=="CSE"  && str2=="2" && str3=="B" ){
window.open('att_list/cse2b.php');
}

/*if(str1=="CSE"  && str2=="3" && str3=="A" ){
alert("oneeeee");
}

if(str1=="CSE"  && str2=="3" && str3=="B" ){
alert("oneeeee");
}

if(str1=="CSE"  && str2=="4" && str3=="A" ){
alert("oneeeee");
}

if(str1=="CSE"  && str2=="4" && str3=="B" ){
alert("oneeeee");
}*/

//IT DEPARTMENT

if(str1=="IT"  && str2=="1" && str3=="A" ){
window.open('att_list/it1a.php');
}
if(str1=="IT"  && str2=="1" && str3=="B" ){
window.open('att_list/it1b.php');
}

if(str1=="IT"  && str2=="2" && str3=="A" ){
window.open('att_list/it2a.php');
}

if(str1=="IT"  && str2=="2" && str3=="B" ){
window.open('att_list/it2b.php');
}

/*if(str1=="IT"  && str2=="3" && str3=="A" ){
alert("oneeeee");
}

if(str1=="IT"  && str2=="3" && str3=="B" ){
alert("oneeeee");
}

if(str1=="IT"  && str2=="4" && str3=="A" ){
alert("oneeeee");
}

if(str1=="IT"  && str2=="4" && str3=="B" ){
alert("oneeeee");
}*/

//MECHNAICAL DEPARTMENT

if(str1=="MECH"  && str2=="1" && str3=="A" ){
window.open('att_list/mech1a.php');
}
if(str1=="MECH"  && str2=="1" && str3=="B" ){
window.open('att_list/mech2b.php');
}

if(str1=="MECH"  && str2=="2" && str3=="A" ){
window.open('att_list/mech1a.php');
}

if(str1=="MECH"  && str2=="2" && str3=="B" ){
window.open('att_list/mech2b.php');
}

/*if(str1=="MECH"  && str2=="3" && str3=="A" ){
alert("oneeeee");
}

if(str1=="MECH"  && str2=="3" && str3=="B" ){
alert("oneeeee");
}

if(str1=="MECH"  && str2=="4" && str3=="A" ){
alert("oneeeee");
}

if(str1=="MECH"  && str2=="4" && str3=="B" ){
alert("oneeeee");
}*/

//ECE DEPARTMENT

if(str1=="ECE"  && str2=="1" && str3=="A" ){
window.open('att_list/ece1a.php');
}
if(str1=="ECE"  && str2=="1" && str3=="B" ){
window.open('att_list/ece1b.php');
}

if(str1=="ECE"  && str2=="2" && str3=="A" ){
window.open('att_list/ece2a.php');
}

if(str1=="ECE"  && str2=="2" && str3=="B" ){
window.open('att_list/ece2b.php');
}

/*if(str1=="ECE"  && str2=="3" && str3=="A" ){
alert("oneeeee");
}

if(str1=="ECE"  && str2=="3" && str3=="B" ){
alert("oneeeee");
}

if(str1=="ECE"  && str2=="4" && str3=="A" ){
alert("oneeeee");
}

if(str1=="ECE"  && str2=="4" && str3=="B" ){
alert("oneeeee");
}*/

}
