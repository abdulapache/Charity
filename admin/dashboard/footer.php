
<script>
	function validation(){
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var password=document.getElementById('password').value;
	var cnic=document.getElementById('cnic').value;
	var contact=document.getElementById('contact').value;
	var city=document.getElementById('city').value;
	var address=document.getElementById('address').value;

    var namecheck=/^[A-Za-z. ]{3,30}$/;




	if(namecheck.test(name)){
		document.getElementById('nameerror').innerHTML=" ";
	}else{
		document.getElementById('nameerror').innerHTML="name in Valid****";
		return false;
	}



	var contactcheck=/^[0-9]{11}$/;

if(contactcheck.test(contact)){
	document.getElementById('contacterror').innerHTML=" ";
}else{
    document.getElementById('contacterror').innerHTML="Invalid contact number****";
	return false;
}

var citycheck=/^[A-Za-z. ]{3,15}$/;
if(citycheck.test(city)){
		document.getElementById('cityerror').innerHTML=" ";
	}else{
		document.getElementById('cityerror').innerHTML="city name inValid****";
		return false;
	}


    var cniccheck=/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/;
	if(cniccheck.test(cnic)){
		document.getElementById('cnicerror').innerHTML=" ";
	}else{
		document.getElementById('cnicerror').innerHTML="Invalid CNIC number****";
		return false;
	}
   

var checkpass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(checkpass.test(password)){
		document.getElementById('passworderror').innerHTML=" ";
	}else{
		document.getElementById('passworderror').innerHTML="6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter";
		return false;
	}





 var checkemail= /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
 if(checkemail.test(email)){
		document.getElementById('emailerror').innerHTML=" ";
	}else{
		document.getElementById('emailerror').innerHTML="Plz enter valid email";
		return false;
	}

	}
	</script>