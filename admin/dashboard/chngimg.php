<?php 

include 'dbconnect.php';
include 'header.php';

echo $file=$_FILES['pic']['name'];
$uploaddir='../assets/img/';
$uploadfile=$uploaddir . basename($_FILES['pic']['name']);
if(move_uploaded_file($_FILES['pic']['tmp_name'],$uploadfile)){
    echo "";
}else{
    echo "";
}
$query="UPDATE admin SET a_img='$file' WHERE a_id='".$id."'";
$q=mysqli_query($con,$query);



if($q){
    echo "<script>
        alert('Your profile Update');
        window.location.href='dashboard.php';
        </script>";
}else{
    echo "<script>alert('network error')window.location.href='adminprofile.php'
    </script>";
}
?>