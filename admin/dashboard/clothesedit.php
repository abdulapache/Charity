<?php

include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM clothes WHERE c_id='".$id."'";
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
</head>
<body>
    <div class="container section">
		<div class="row">
			<div class="col-md-7 regis shadow m-auto">
				<h2 class="mt-3 section-head">Clothes Donate</h2>
				<form method="post" action="clotheseditdb.php?r=<?php echo $row['c_id']?>">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['c_name']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Brand / Shop Name</label>
					<select class="form-control" name="brand">
					<option><?php echo $row['c_brand']?></option>
						<option>J.</option>
						<option>Zellbury</option>
                        <option>Khaadi</option>
                        <option>Sana Safinaz</option>
						<option>Orient textile</option>
						<option>Agha Noor</option>
						<option>Others</option>
					</select>
				</div>
                <div class="form-group  mt-2">
					<label>Male Quantity</label>
					<input type="number" class="form-control" name="mquantity" placeholder="Enter address" value="<?php echo $row['c_mquantity']?>">
				</div>
                <div class="form-group  mt-2">
					<label>FeMale Quantity</label>
					<input type="number" class="form-control" name="fquantity" placeholder="Enter address" value="<?php echo $row['c_fquantity']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com." value="<?php echo $row['c_username']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Enter Password ***" value="<?php echo $row['c_password']?>">
				</div>
			
				
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" placeholder="Enter address" value="<?php echo $row['c_contact']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo $row['c_address']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Gender</label>
					<select class="form-control" name="gender">
					<option value="<?php echo $row['c_gender']?>"><?php echo $row['c_gender']?></option>
                        <option>Male</option>
						<option>Female</option>
						<option>others</option>
                       
					</select>
				</div>
				<button class="btn btn-outline-secondary mb-3 mt-2" value="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>