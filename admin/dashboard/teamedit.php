<?php
include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM team WHERE t_id='".$id."'";
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
				<h2 class="mt-3 shadow">Registration For NGO Team</h2>
				<form method="post" action="teameditdb.php?r=<?php echo $row['t_id']?>" enctype="multipart/form-data">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['t_name']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="number" class="form-control" name="contact" placeholder="@gmail.com." value="<?php echo $row['t_contact']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Post</label>
					<input type="text" class="form-control" name="post" placeholder="Enter Password ***" value="<?php echo $row['t_post']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Salary</label>
					<input type="number" class="form-control" name="salary" placeholder="Enter Password ***" value="<?php echo $row['t_salary']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com." value="<?php echo $row['t_username']?>" disabled>
				</div>
				<div class="form-group  mt-2">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter Password ***" value="<?php echo $row['t_password']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Department</label>
					<input type="text" class="form-control" name="department" placeholder="Enter address" value="<?php echo $row['t_department']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Select City</label>
					<select class="form-control" name="city" value="<?php echo $row['t_city']?>">
						<option>Lahore</option>
						<option>Karchi</option>
						<option>Sahiwal</option>
						<option>Haveli Lakha</option>
						<option>Okara</option>
					</select>
				</div>
				<div class="form-group  mt-2-file">
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo $row['t_address']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Select Gender</label>
					<select class="form-control" name="gender" value="<?php echo $row['t_gender']?>">
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div>
				<div class="text-center mt-5">
				<button class="btn btn-outline-secondary mb-5" value="submit">Submit</button>
				</div>
				</form>
			</div>
		</div>
	</div>





</body>
</html>