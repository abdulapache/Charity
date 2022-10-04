<?php
include 'dbconnect.php';

$id=$_GET['r'];

$query="DELETE FROM team WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
    echo "<script>
        alert('This entity Delete successfully');
        window.location.href='team.php';
        </script>";
}
else{
    echo "<script>
    alert('network error');
    window.location.href='team.php';
    </script>";
}
?>