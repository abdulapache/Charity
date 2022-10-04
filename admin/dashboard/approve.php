<?php

include 'function.php';

echo $id=$_GET['r'];
$query="SELECT * FROM request WHERE r_id='".$id."'";
if(count(fetchAll($query)) >0){
    foreach(fetchAll($query) as $row){
        $name=$row['r_name'];
        $username=$row['r_username'];
        $password=$row['r_password'];
        $cnic=$row['r_cnic'];
        $contact=$row['r_contact'];
        $city=$row['r_city'];
        $address=$row['r_address'];
        $gender=$row['r_gender'];
        $query="INSERT INTO `donors` (`d_name`, `d_username`, `d_password`, `d_cnic`, `d_contact`, `d_city`, `d_address`, `d_gender`) 
        VALUES ('$name', '$username', '$password', '$cnic', '$contact', '$city', '$address', '$gender')";
        if(performQuery($query)){
            echo "success";
        }else{
            echo "not";
        }
    }
    $query="DELETE FROM request WHERE r_id='".$id."'";
    if(performQuery($query)){
        header('Location:notification.php');
    }
}



?>