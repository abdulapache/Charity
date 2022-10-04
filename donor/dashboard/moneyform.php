<?php

include 'header.php';
$query="SELECT * FROM donors WHERE d_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);


?>






    <div class="container section mt-5">
		<div class="row">
			<div class="col-md-7 regis shadow m-auto mt-5">
				<h2 class="mt-5 section-head">Cash Donate</h2>
				<form method="post" action="moneydb.php">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['d_name']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Cash</label>
					<input type="number" class="form-control" name="money" id="cash" placeholder="Enter donate money">
				</div>
                <!-- <div class="form-group  mt-2">
					<label>Account Number</label>
					<input type="number" class="form-control" name="accountno" placeholder="Enter account Number">
				</div>
                <div class="form-group  mt-2">
					<label>Account Name</label>
					<input type="text" class="form-control" name="accountn" placeholder="Enter Account Name">
				</div> -->
                <div class="form-group  mt-2" hidden>
					<label>Username</label>
					<input type="email" class="form-control" name="username" value="<?php echo $row['d_username']?>">
				</div>
				<div class="form-group  mt-2" hidden>
					<label>Password</label>
					<input type="text" class="form-control" name="password" value="<?php echo $row['d_password']?>">
				</div>
			
				
				<div class="form-group  mt-2" hidden>
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" value="<?php echo $row['d_contact']?>">
				</div>
                <div class="form-group  mt-2" hidden>
					<label>Address</label>
					<input type="text" class="form-control" name="address" value="<?php echo $row['d_address']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Status</label>
					<select class="form-control" name="status" value="">
                        <option selected>Setect the menu</option>
						<option>Yearly</option>
						<option>Monthly</option>
                        <option>other</option>
					</select>
				</div>
				<div class="form-group  mt-2" hidden>
					<label>Gender</label>
					<select class="form-control" name="gender" value="">
                        <option><?php echo $row['d_gender']?></option>
						<option>Male</option>
						<option>Female</option>
                        <option>other</option>
					</select>
				</div>
				<div class="text-center mt-3">
				<button class="btn btn-outline-secondary mb-3 mt-2" value="submit">Submit</button>
				</div>
				
				</form>
				<div id="paypal-button-container"></div>
			</div>
		</div>
	</div>
</body>
</html>

<script src="assets/jquery.js"></script>
<script srch="https://www.paypal.com/sdk/js?client_id=sd&currency=USD">
</script>
<script>
	var cash=0;
	$(document).ready(funcation(){
		$(#cash).on("keypress blur", funcation(){
			var cash = $(#cash).val();
		})
	});
 paypal.Buttons({

// Set up the transaction
createOrder: function(data, actions) {
	return actions.order.create({
		purchase_units: [{
			amount: {
				value: cash
			}
		}]
	});
},

// Finalize the transaction
onApprove: function(data, actions) {
	return actions.order.capture().then(function(details) {
		// Show a success message to the buyer
		alert('Transaction completed by ' + details.payer.name.given_name + '!');
		document.getElementById("myform").submit()
	});
}


}).render('#paypal-button-container');
	</script>