<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
       body{
         background-image: url("assets/img/create.jpg"); 
        height: 100vh;
		opacity: .80;
       }
       span{
        color:#5ec6ca;
        font-weight:600;
       }
	   .card{
		   background:white;
	   }
    </style>

</head>
<body>
    <div class="container section">
		<div class="row">
			<div class="col-md-7 card shadow m-auto">
				<h2 class="mt-3 section-head"><span>Create</span> Account For <span>Donor</span></h2>
				<form method="post" action="createdb.php" onsubmit="return validation()">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." id="name">
					<span class="text danger font-weight-bold" id="nameerror"></span>
				</div>
                
                <div class="form-group  mt-2">
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com" id="email">
					<span class="text danger" id="emailerror"></span>
				</div>
				<div class="form-group  mt-2">
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Enter the password" id="password">
					<span class="text danger" id="passworderror"></span>
				</div>
                <div class="form-group  mt-2">
					<label>CNIC</label>
					<input type="text" class="form-control" name="cnic" placeholder="Enter the cnic" id="cnic">
					<span class="text danger" id="cnicerror"></span>
				</div>
				
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" placeholder="Enter the contact" id="contact">
					<span class="text danger" id="contacterror"></span>
				</div>
                <div class="form-group  mt-2">
					<label>City</label>
					<input type="text" class="form-control" name="city" placeholder="Enter City" id="city">
					<span class="text danger" id="cityerror"></span>
				</div>
                <div class="form-group  mt-2">
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter the address" id="address">
					<span class="text danger" id="addresserror"></span>
				</div>
              
				<div class="form-group  mt-2">
					<label>Gender</label>
					<select class="form-control" name="gender" value="">
                        <option selected>Setect the Gender</option>
						<option>Male</option>
						<option>Female</option>
                        <option>other</option>
					</select>
				</div>
				<div class="text-center mt-4">
                <input type="submit" class="btn btn-outline-secondary mb-3 mt-2">
                </div>
				</form>
				<div class="text-end mb-3">
         <a href="create.php"> Login Account        <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
			</div>
		</div>
	</div>






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













</body>
</html>


