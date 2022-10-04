<?php

include 'dbconnect.php';

$id=$_GET['r'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$salary=$_POST['salary'];
$username=$_POST['username'];
$password=$_POST['password'];
$department=$_POST['department'];
$city=$_POST['city'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$query="UPDATE team SET t_name='$name',t_contact='$contact',t_salary='$salary',t_username='$salary',t_password='$password',t_department='$department',t_city=
'$city',t_address='$address',t_gender='$gender' WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    header('Location:team.php');
}
else{
    alert('server error');
    header('Location:team.php');
}

?>