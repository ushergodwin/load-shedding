function validateForm() {
    'use strict';
            var lId = document.schForm.identification;
            var lDist = document.schForm.state;
            var lDiv = document.schForm.countrya;
            var lPar = document.schForm.district;
            let letters = /^[0-9a-zA-Z]+$/;
     let letters = /^[A-Za-z]+$/;
    if (!lId.value.match(letters)) {
    var a = document.getElementById("id").innerHTML = 'Please Enter ID First';
lId.focus();
return false;
}
if(!lDist.value.match(letters)){
 var b = document.getElementById("dist").innerHTML ='please enter district';
lDist.focus();
return false;
} 
if(!lDiv.value.match(letters)){
    var c = document.getElementById("div").innerHTML ='please enter Division';
lDiv.focus();
return false;
} 
if(!lPar.value.match(letters)){
var d = document.getElementById("par").innerHTML = 'please enter Parish';
lPar.focus();
return false;
}else{
    return true;
}
}


function isValid(){
	var day = document.form_3.day;
	var per = document.form_3.period;
	var end = document.form_3.periodto;
	var ident = document.form_3.identification;
	let numbers = /(\d{4})-(\d{2})-(\d{2})/;
	if(!day.value.match(numbers)) {
	 	var i = document.getElementById("day").innerHTML ="Please Enter the Date";
	 	day.focus();
	 	return false;
	 }
	let numbers = /^\d{1,2}:\d{2}([ap]m)?$/;
	if(!per.value.match(numbers)){
        var k = document.getElementById("per").innerHTML = "Please Enter Start Time";
	 	per.focus();
	 	return false;
	 }
	let numbers = /^\d{1,2}:\d{2}([ap]m)?$/;
	if(!end.value.match(numbers)){
        var l = document.getElementById("end").innerHTML ="Please Enter End Time";
	 	end.focus();
	 	return false;
	 }
	let numbers = /^[0-9a-zA-Z]+$/;
	if(!ident.value.match(numbers)){
		var m = document.getElementById("id").innerHTML ="Please Enter ID";
		ident.focus();
		return false;
	}else{
        return true;
    }
}


function validateAccount(){

	var uname = document.account.username;
	var pass = document.account.password;
	var conf = document.account.password_2;
	var sname = document.account.name;
	var cont = document.account.contact;
	var add = document.account.address;	
	let letnum = /^[A-Za-z]+$/;
	if(!uname.value.match(letnum)){
        var e = document.getElementById("name").innerHTML ='Please Enter User Name';
		uname.focus();
		return false;
	}
let alphernumeric = /^[0-9a-zA-Z]+$/;
if (!pass.value.match(alphernumeric)){
    var f = document.getElementById("pass").innerHTML ="Password should contain letters and numbers";
pass.focus();
return false;
 }
	if(pass.value !== conf.value){
	var g = document.getElementById("conf").innerHTML ='password does not match';
        conf.focus();
	  return false;
	}	
	let sname_len = sname.value.length;
	if (sname_len !==0)
	 {
      var f = document.getElementById("sname").innerHTML = "Please Enetr Staff Name";
		sname.focus();
		return false;
	}
   let numbers = /^[0-9]+$/;
   if(!cont.value.match(numbers)){ 
   	var h = document.getElementById("cont").innerHTML = "Please enter staff contact/ min length 10 max length 10";
   		cont.focus();
   		return false;
   	}
	let letters = /^[A-Za-z]+$/;
	if(!add.value.match(letters)){
       var j = document.getElementById("add").innerHTML ="Please Enter Staff Address";
         add.focus();
         return false;
	}else{
        return true;
    }
}

function ValidateEmail(){
    var email = document.form1.EmailAddress;
var mailformat = /^[a-z0-9-.]{1,30}@[a-z]{1,65}.(com|net|org|info|biz|([a-z]{2,3}.[a-z]{2}))+$/;
if(!email.value.match(mailformat)){
var em = document.getElementById("error").innerHTML ="Invalid email address!";
email.focus();
return false;
}else{
    return true;
}
}
function admin() {
  var usn = document.getElementById("username").value;
  var pss = document.getElementById("psw").value;
    if (usn == "Admin" && pss == "godwin96") {

        location.href = "deletestaff.php";
    }  
         else  if (usn == "Jonathan" && pss == "jonathan2020") {

        location.href = "deletestaff.php";
    } 

        else  if (usn == "Ishak" && pss == "ishak2020") {

        location.href = "deletestaff.php";
    }  else if( usn == "SK" && pss == "sklynn"){
        location.href = "deletestaff.php";
    } else if(usn == "godwine" && pss == "godwine2020" ){
        location.href = "deletestaff.php";
    } else if(usn == "flo" && pss == "flo2020"){
        location.href = "deletestaff.php";
    } else if(usn == "milton" && pss == "kawesa"){
        location.href = "deletestaff.php";
    }
    else {
        alert("Invalid Login Details");
        return false;
    }
}
function load(){
    alert("i work");
}