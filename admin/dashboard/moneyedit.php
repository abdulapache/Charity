<?php
include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM money WHERE m_id='".$id."'";
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
				<h2 class="mt-3 section-head"><span>Update</span> User</h2>
                <form method="post" action="moneyeditdb.php?r=<?php echo $row['m_id']?>">
				<div class="form-group mt-4">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter the Full name.." value="<?php echo $row['m_name']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Cash</label>
					<input type="number" class="form-control" name="money" placeholder="Enter donate money" value="<?php echo $row['m_money']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Account Number</label>
					<input type="number" class="form-control" name="accountno" placeholder="Enter account Number" value="<?php echo $row['m_accountno']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Account Name</label>
					<input type="text" class="form-control" name="accountn" placeholder="Enter Account Name" value="<?php echo $row['m_accountn']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Username</label>
					<input type="email" class="form-control" name="username" value="<?php echo $row['m_username']?>">
				</div>
				<div class="form-group  mt-2">
					<label>Password</label>
					<input type="text" class="form-control" name="password" value="<?php echo $row['m_password']?>">
				</div>
			
				
				<div class="form-group  mt-2">
					<label>Contact</label>
					<input type="text" class="form-control" name="contact" value="<?php echo $row['m_contact']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Address</label>
					<input type="text" class="form-control" name="address" value="<?php echo $row['m_address']?>">
				</div>
                <div class="form-group  mt-2">
					<label>Status</label>
					<select class="form-control" name="status">
                        <option><?php echo $row['m_status']?></option>
						<option>Yearly</option>
						<option>Monthly</option>
                        <option>other</option>
					</select>
				</div>
				<div class="form-group  mt-2">
					<label>Gender</label>
					<select class="form-control" name="gender">
                        <option><?php echo $row['m_gender']?></option>
						<option>Male</option>
						<option>Female</option>
                        <option>other</option>
					</select>
				</div>
				<div class="text-center mt-3">
				<button class="btn btn-outline-secondary mb-3 mt-2" value="submit">Submit</button>
				</div>
				</form>
			</div>
		</div>
	</div>














	<script type="text/javascript">
	function validation(){
		var name = document.getElementById('name').value; 

		var namecheck = /^[A-Za-z. ]{3,30}$/;

		if(name == ""){
		document.getElementById('nameerror').innerHTML="** plz enter the name";
		return false;
	}
		


		if(name.test(namecheck)){
			document.getElementById('nameerror').innerHTML="";
		}
		else{
			document.getElementById('nameerror').innerHTML="** plz enter the name";
			return false;
		}
		
	}
</script>










</body>
</html>


