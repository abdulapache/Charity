<?php

include 'dbconnect.php';
$id=$_GET['r'];
$name=$_POST['name'];
$department=$_POST['department'];
$post=$_POST['post'];
$salary=$_POST['salary'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];

echo $query="UPDATE team SET t_name='$name',t_department='$department',t_post='$post',t_salary='$salary',t_password='$password',t_contact='$contact',
t_address='$address',t_city='$city',t_gender='$gender' WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);

if($q){
    header('Location:team.php');
}
else{
    alert('server error');
    header('Location:team.php');
}

?>