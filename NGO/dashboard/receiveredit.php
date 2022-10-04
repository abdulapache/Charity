

<?php

include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM receivery WHERE r_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
?>







<!DOCTYPE html>
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
        .regis{
            opacity: 0.8;
            border-radius: 10px 10px 10px 10px;
        }
        h2{
            text-align: center;
            font-weight: 700;
            font-size: 50px;
        }
    </style>
</head>
<body>




    <div class="container section">
		<div class="row">
			<div class="col-md-7 regis shadow m-auto">
				<h2 class="mt-3 shadow">Registration Users</h2>
				<form method="post" action="receivereditdb.php?r=<?php echo $row['r_id']?>" enctype="multipart/form-data">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['r_name']?>">
				</div>
				<div class="form-group  mt-2">
					<label>CNIC</label>
					<input type="number" class="form-control" name="cnic" placeholder="Enter user cnic" value="<?php echo $row['r_cnic']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com." value="<?php echo $row['r_username']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Enter Password ***" value="<?php echo $row['r_password']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="number" class="form-control" name="contact" placeholder="Enter the user contact" value="<?php echo $row['r_contact']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Need</label>
					<input type="text" class="form-control" name="need" placeholder="Enter want things" value="<?php echo $row['r_need']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Cause</label>
					<input type="text" class="form-control" name="cause" placeholder="What cause" value="<?php echo $row['r_case']?>">
				</div>
				<div class="form-group  mt-2">
					<label>City</label>
					<input type="text" class="form-control" name="city" placeholder="Enter user city" value="<?php echo $row['r_city']?>">
				</div>
				<div class="form-group  mt-2-file">
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo $row['r_address']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Select Gender</label>
					<select class="form-control" name="gender" value="">
					<option><?php echo $row['r_gender']?></option>
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div>
				<div class="text-center mt-4">
				<button class="btn btn-outline-secondary mb-5" value="submit">Submit</button>
				</div>
				</form>
			</div>
		</div>
	</div>





</body>
</html>