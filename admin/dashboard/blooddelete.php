<?php
include 'dbconnect.php';

$id=$_GET['r'];

$query="DELETE FROM blood WHERE b_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    echo "<script>
        alert('This entity Delete successfully');
        window.location.href='bdonor.php';
        </script>";
}
else{
    echo "<script>
        alert('network error');
        window.location.href='bdonor.php';
        </script>"';
}
?>