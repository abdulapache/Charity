<?php

include 'dbconnect.php';

$id=$_GET['r'];

$query="DELETE FROM clothes WHERE c_id='".$id."'";

$q=mysqli_query($con,$query);
if($q){
    echo "<script>
        alert('This entity Delete successfully');
        window.location.href='cdonor.php';
        </script>";
}
else{
    echo "<script>
        alert('network error');
        window.location.href='bdonor.php';
        </script>";
}

?>