<?php
include 'dbconnect.php';

$id=$_GET['r'];

$query="DELETE * FROM receivery WHERE r_id='".$id."'";
$q=mysqli_query($con,$query);
?>