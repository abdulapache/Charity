<?php
include 'header.php';
include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM blood WHERE b_id='".$id."'";
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container section">
		<div class="row">
			<div class="col-md-7 regis shadow m-auto">
				<h2 class="mt-3 section-head">Blood Donate</h2>
				<form method="post" action="bloodeditdb.php?r=<?php echo $row['b_id']?>" onsubmit="return validation()">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['b_name']?>" id="name">
					<span class="text-danger" id="nameerror"></span>
				</div>
				<div class="form-group  mt-2">
					<label>Blood Group</label>
					<select class="form-control" name="group" value="<?php echo $row['b_group']?>">
					<option><?php echo $row['b_group']?></option>	
					<option>A+</option>
						<option>A-</option>
                        <option>AB+</option>
                        <option>AB-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
                        <option>O-</option>
					</select>
				</div>
                <div class="form-group  mt-2" hidden>
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com." value="<?php echo $row['b_username']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Enter Password ***" value="<?php echo $row['b_password']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Hospital</label>
					<input type="text" class="form-control" name="hospital" placeholder="Enter address" value="<?php echo $row['b_hospital']?>">
				</div>
				
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" placeholder="Enter address" value="<?php echo $row['b_contact']?>" id="contact">
					<span class="text danger" id="contacterror"></span>
				</div>
				<div class="form-group  mt-2">
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo $row['b_address']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Gender</label>
					<select class="form-control" name="gender" value="<?php echo $row['b_gender']?>">
					<option><?php echo $row['b_gender']?></option>
						<option>Male</option>
						<option>female</option>
                        <option>Others</option>
					</select>
				</div>
				<div class="text-center mt-4">
				<button class="btn btn-outline-secondary mb-3 mt-2" type="submit">Update</button>
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