<?php
include 'dbconnect.php';
$id=$_GET['r'];
$name=$_POST['name'];
$money=$_POST['money'];
$accountno=$_POST['accountno'];
$accountn=$_POST['accountn'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$status=$_POST['status'];
$gender=$_POST['gender'];

$query="UPDATE `money` SET `m_name`='$name'
,`m_money`='$money',`m_accountno`='$accountno',`m_accountn`='$accountn',
`m_username`='$username',`m_password`='$password',`m_contact`='$contact',
`m_address`='$address',`m_status`='$status',`m_gender`='$gender' WHERE m_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    header('Location:mdonor.php');
}else{
    header('Location:moneyedit.php');
}


?>