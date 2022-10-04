<?php
include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM donors WHERE d_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
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
				<h2 class="mt-3 section-head"><span>Update</span> Account For <span>Donor</span></h2>
				<form method="post" action="donoreditdb.php?r=<?php echo $row['d_id']?>" onsubmit="return validation()">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." id="name" value="<?php  echo $row['d_name']?>">
					<span class="text danger font-weight-bold" id="nameerror"></span>
				</div>
                
                <div class="form-group  mt-2">
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com" id="email" value="<?php  echo $row['d_username']?>">
					<span class="text danger" id="emailerror"></span>
				</div>
				<div class="form-group  mt-2">
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Enter the password" id="password" value="<?php  echo $row['d_password']?>">
					<span class="text danger" id="passworderror"></span>
				</div>
                <div class="form-group  mt-2">
					<label>CNIC</label>
					<input type="text" class="form-control" name="cnic" placeholder="Enter the cnic" id="cnic" value="<?php  echo $row['d_cnic']?>">
					<span class="text danger" id="cnicerror"></span>
				</div>
				
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" placeholder="Enter the contact" id="contact" value="<?php  echo $row['d_contact']?>">
					<span class="text danger" id="contacterror"></span>
				</div>
                <div class="form-group  mt-2">
					<label>City</label>
					<input type="text" class="form-control" name="city" placeholder="Enter City" id="city" value="<?php  echo $row['d_city']?>">
					<span class="text danger" id="cityerror"></span>
				</div>
                <div class="form-group  mt-2">
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter the address" id="address" value="<?php  echo $row['d_address']?>">
					<span class="text danger" id="addresserror"></span>
				</div>
              
				<div class="form-group  mt-2">
					<label>Status</label>
					<select class="form-control" name="status" value="<?php echo $row['d_status']?>">
                        <option><?php  echo $row['d_status']?></option>
						<option>Monthly</option>
						<option>Yearly</option>
                        <option>other</option>
					</select>
				</div>
                <div class="form-group  mt-2">
					<label>Gender</label>
					<select class="form-control" name="gender" value="<?php echo $row['d_gender']?>">
                        <option><?php  echo $row['d_gender']?></option>
						<option>Male</option>
						<option>Female</option>
                        <option>other</option>
					</select>
				</div>
				<div class="text-center mt-4">
                <input type="submit" class="btn btn-outline-secondary mb-3 mt-2">
                </div>
				</form>
			</div>
		</div>
	</div>













<?php

include 'footer.php';

?>










</body>
</html>


