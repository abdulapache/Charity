<?php

include 'dbconnect.php';
$id=$_GET['r'];

$name=$_POST['name'];
$brand=$_POST['brand'];
$mquantity=$_POST['mquantity'];
$fquantity=$_POST['fquantity'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$gender=$_POST['gender'];

echo $query="UPDATE clothes SET c_name='$name',c_brand='$brand',c_mquantity='$mquantity',c_fquantity='$fquantity',c_username='$username',c_password='$password',c_contact='$contact',c_address='$address',
c_gender='$gender' WHERE c_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    header('Location:cdonor.php');
}
else{
    alert('server error');
    header('Location:cdonor.php');
}
?>