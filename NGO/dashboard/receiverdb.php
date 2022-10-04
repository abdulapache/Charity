<?php

include 'dbconnect.php';

$name=$_POST['name'];
$cnic=$_POST['cnic'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$need=$_POST['need'];
$cause=$_POST['cause'];
$city=$_POST['city'];
$address=$_POST['address'];
$gender=$_POST['gender'];

echo $query="INSERT INTO `receivery` (`r_name`, `r_cnic`, `r_username`, `r_password`, `r_contact`, `r_need`, `r_case`, `r_city`, `r_address`, `r_gender`) 
VALUES ('$name', '$cnic', '$username', '$password', '$contact', '$need', '$cause', '$city', '$address', '$gender')";
$q=mysqli_query($con,$query);

if($q){
    header('Location:receiver.php');
}
else{
    alert('server error');
    header('Location:receiver.php');
}



?>