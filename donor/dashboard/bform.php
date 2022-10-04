<?php
include 'header.php';
include 'dbconnect.php';
$query="SELECT * FROM donors WHERE d_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);


?>


    <div class="container section mt-5">
		<div class="row">
			<div class="col-md-7 regis shadow m-auto mt-5">
				<h2 class="mt-5 section-head">Blood Donate</h2>
				<form method="post" action="blooddb.php">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['d_name']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Blood Group</label>
					<select class="form-control" name="group" value="">
					    <option>Select the blood group</option>  
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
				<div class="form-group  mt-2">
					<label>Botle Quantity</label>
					<input type="Number" class="form-control" name="botle" placeholder="">
				</div>
				<div class="form-group  mt-2">
					<label>Hospital</label>
					<input type="text" class="form-control" name="hospital" placeholder="Enter hospital name">
				</div>
                <div class="form-group  mt-2" hidden>
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com." value="<?php echo $row['d_username']?>">
				</div>
				<div class="form-group  mt-2" hidden>
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Enter Password ***" value="<?php echo $row['d_password']?>">
				</div>
				<div class="form-group  mt-2" hidden>
					<label>CNIC</label>
					<input type="text" class="form-control" name="cnic" placeholder="Enter address" value="<?php echo $row['d_cnic']?>">
				</div>
				
				<div class="form-group  mt-2" hidden>
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" placeholder="Enter Cotact" value="<?php echo $row['d_contact']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo $row['d_address']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Date</label>
					<input type="date" class="form-control" name="date" placeholder="yyyy/mm/dd">
				</div>
				<div class="form-group  mt-2">
					<label>Gender</label>
					<select class="form-control" name="gender" value="">
					     <option><?php echo $row['d_gender']?></option>
						<option>Male</option>
						<option>female</option>
                        <option>Others</option>
					</select>
				</div>
				<button class="btn btn-outline-secondary mb-3 mt-2" value="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>