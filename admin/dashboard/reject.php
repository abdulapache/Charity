<?php

include 'dbconnect.php';

$id=$_GET['r'];

$query="DELETE FROM request WHERE r_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    echo "success";
}
if($q){
    header('Location:notification.php');
}
else{
    alert('server error');
    header('Location:notification.php');
}
?>