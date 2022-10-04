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
				<h2 class="mt-5 section-head ">Clothes Donate</h2>
				<form method="post" action="clothesdb.php">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['d_name']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Brand / Shop Name</label>
					<select class="form-control" name="brand" value="" required>
                        <option>Select Brand</option>
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
					<input type="number" class="form-control" name="mquantity" placeholder="Enter address" required>
				</div>
                <div class="form-group  mt-2">
					<label>FeMale Quantity</label>
					<input type="number" class="form-control" name="fquantity" placeholder="Enter address" required>
				</div>
                <div class="form-group  mt-2" hidden>
					<label>Username</label>
					<input type="email" class="form-control" name="username" placeholder="@gmail.com." value="<?php echo $row['d_username']?>">
				</div>
				<div class="form-group  mt-2" hidden>
					<label>Password</label>
					<input type="text" class="form-control" name="password" placeholder="Enter Password ***" value="<?php echo $row['d_password']?>">
				</div>
			
				
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" placeholder="Enter address" value="<?php echo $row['d_contact']?>">
				</div>
                <div class="form-group  mt-2" hidden>
					<label>Address</label>
					<input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo $row['d_address']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Gender</label>
					<select class="form-control" name="gender" value="">
					<option><?php echo $row['d_gender']?></option>
                        <option>Male</option>
						<option>Female</option>
						<option>others</option>
                       
					</select>
				</div>
             
				<div class="text-center mt-3">
				<button class="btn btn-outline-secondary mb-3 mt-2" value="submit">Submit</button>
				</div>
			   
				</form>
			</div>
		</div>
	</div>
</body>
</html>