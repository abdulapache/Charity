<?php

include 'dbconnect.php';
$id=$_GET['r'];

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


$query="UPDATE receivery SET r_name='$name', r_cnic='$cnic', r_username='$username',r_password='$password', r_contact='$contact', r_need='$need',
r_case='$cause', r_city='$city', r_address='$address', r_gender='$gender' WHERE r_id='".$id."'";
$q=mysqli_query($con,$query);

if($q){
    header('Location:receiver.php');
}
else{
    alert('server error');
    header('Location:receiveredit.php');
}

?>