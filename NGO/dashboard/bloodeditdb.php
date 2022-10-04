<?php

include 'dbconnect.php';
$id=$_GET['r'];
$name=$_POST['name'];
$group=$_POST['group'];
$username=$_POST['username'];
$password=$_POST['password'];
$hospital=$_POST['hospital'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$gender=$_POST['gender'];

echo $query="UPDATE blood SET b_name='$name',b_group='$group',b_username='$username',b_password='$password',b_hospital='$hospital',b_contact='$contact',b_address='$address',
b_gender='$gender' WHERE b_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    header('Location:bdonor.php');
}
else{
    alert('server error');
    header('Location:bdonor.php');
}

?>