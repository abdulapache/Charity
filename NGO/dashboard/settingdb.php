<?php

include 'dbconnect.php';
include 'header.php';
$password=$row['t_password'];
$previous=$_POST['previous'];
$new=$_POST['new'];
$confirm=$_POST['confirm'];



if($previous==$password){
    if($new==$confirm){
        $query="UPDATE team SET t_password='$confirm' WHERE t_id='".$id."'";
        $q=mysqli_query($con,$query);
        if($q){
            header('Location:settingphp');
        }
        else{
            alert('server error');
            header('Location:setting.php');
        }
    }
    else{
        echo "<script>
        alert('new&confim password not mach');
        window.location.href='setting.php';
        </script>";
    }

}else{
    echo "<script>
    alert('prvious password not correct');
    window.location.href='setting.php';
    </script>";
}








?>