<?php
include 'dbconnect.php';

$name=$_POST['name'];
$department=$_POST['department'];
$post=$_POST['post'];
$salary=$_POST['salary'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
echo $query="INSERT INTO team (t_name,t_department,t_post,t_salary,t_username,t_password,t_contact,t_address,t_city,t_gender) VALUES ('$name','$department','$post','$salary','$username','$password',
'$contact','$address','$city','$gender')";

$q=mysqli_query($con,$query);

if($q){
    header('Location:team.php');
}
else{
    alert('server error');
    header('Location:team.php');
}

?>