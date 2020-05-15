function validateForm() {
            var lId = document.schForm.identification;
            var lDist = document.schForm.state;
            var lDiv = document.schForm.countrya;
            var lPar = document.schForm.district;
            if(locationID(lId)) {
             if(locationDistrict(lDist)) {
             if(locationDivision(lDiv)){
             if(locationParish(lPar)) {
             }
             }
             }
             } return false; } function locationID(lId) { var letters = /^[0-9a-zA-Z]+$/; if (lId.value.match(letters)) { return true; } else { alert('Please Enter ID First');
lId.focus();
return false;
}
}    function locationDistrict(lDist)
{ 
var letters = /^[A-Za-z]+$/;
if(lDist.value.match(letters))
{
return true;
}
else
{
alert('please enter district');
lDist.focus();
return false;
}
}    function locationDivision(lDiv)
{ 
var letters = /^[A-Za-z]+$/;
if(lDiv.value.match(letters))
{
return true;
}
else
{
alert('please enter Division');
lDiv.focus();
return false;
}
}   function locationParish(lPar)
{ 
var letters = /^[A-Za-z]+$/;
if(lPar.value.match(letters))
{
return true;
}
else
{
alert('please enter Parish');
lPar.focus();
return false;
}
}


function isValid(){
	var day = document.form_3.day;
	var per = document.form_3.period;
	var end = document.form_3.periodto;
	var ident = document.form_3.identification;
	if(validDay(day))
	{	
	if(period(per))
	{
	if(endTime(end))
	{	
	if(iden(ident))
	{	
	}
	}
    }
	}
	return false;
}    function validDay(day){
	var numbers = /(\d{4})-(\d{2})-(\d{2})/;
	if(day.value.match(numbers))
	 {
	 	return true;
	 }	else{
	 	alert("Please Enter the Date");
	 	day.focus();
	 	return false;
	 }
}  function period(per){
	var numbers = /^\d{1,2}:\d{2}([ap]m)?$/;
	if(per.value.match(numbers))
	 {
	 	return true;
	 }	else{
	 	alert("Please Enter Start Time");
	 	per.focus();
	 	return false;
	 }
}  function endTime(end){
	var numbers = /^\d{1,2}:\d{2}([ap]m)?$/;
	if(end.value.match(numbers))
	 {
	 	return true;
	 }	else{
	 	alert("Please Enter End Time");
	 	end.focus();
	 	return false;
	 }
	 }  function iden(ident){
	var numbers = /^[0-9a-zA-Z]+$/;
	if(ident.value.match(numbers))
	{
		return true;
	} else{
		alert("Please Enter ID");
		ident.focus();
		return false;
	}
}


function validateAccount(){

	var uname = document.account.username;
	var pass = document.account.password;
	var conf = document.account.password_2;
	var sname = document.account.name;
	var cont = document.account.contact;
	var add = document.account.address;

	if(user(uname))
	{

	if(password(pass))
	{
	if(password2(conf, pass))
	{
	if(staff(sname))
	{
	if(contact(cont))
	{
	if(address(add))
	{
	}
	}
	}
	}
	}
    }
	return false;	
}  function user(uname) {
	var letnum = /^[A-Za-z]+$/;
	if(uname.value.match(letnum))
	{
		return true;
	} else{
		alert('Please Enter User Name');
		uname.focus();
		return false;
	}	
}   function password(pass)
{
var alphernumeric = /^[0-9a-zA-Z]+$/;
if (pass.value.match(alphernumeric))
{
return true;
} else{
	alert("Password should contain letters and numbers");
pass.focus();
return false;
 }
}  function password2(conf, pass){
	var con = conf.value;
	var pa = pass.value;
	if(con === pa)
	{
	return true;
	} else{
		alert('password does not match');
        conf.focus();
	  return false;
	}	

}  function staff(sname){
	var sname_len = sname.value.length;
	if (sname_len !==0)
	 {
      return true;
	} else{
		alert("Please Enetr Staff Name");
		sname.focus();
		return false;
	}
} function contact(cont){
   var numbers = /^[0-9]+$/;
   if(cont.value.match(numbers))
   	{ 
   		return true;
   	} else{
   		alert("Please enter staff contact/ min length 10 max length 10");
   		cont.focus();
   		return false;
   	}
}  function address(add){
	var letters = /^[A-Za-z]+$/;
	if(add.value.match(letters))
	{
		return true;
	} else{
		alert("Please Enter Staff Address");
         add.focus();
         return false;
	}	
}  

function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.form1.EmailAddress.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.EmailAddress.focus();
return false;
}
}

function logOut() {
	var out = confirm("Logout Of Your Account?");
	if (out) {
		location.href="logout.php";
	}
	else {
		return false;
	}
}





