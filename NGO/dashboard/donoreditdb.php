<?php
$con=mysqli_connect('localhost','root','','charity');

echo $id=$_GET['r'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$cnic=$_POST['cnic'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$status=$_POST['status'];
$gender=$_POST['gender'];
echo $query="UPDATE `donors` SET `d_name`='$name',`d_username`='$username',`d_password`='$password',`d_cnic`='$cnic',`d_contact`='$contact',`d_city`='$city',
`d_address`='$address',`d_status`='$status',`d_gender`='$gender' WHERE d_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    header('Location:donors.php');
}
else{
    alert('server error');
    header('Location:donoredit.php');
}


?>