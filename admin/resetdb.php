<?php
$con=mysqli_connect('localhost','root','','charity');
$password=$_POST['password'];
$query="UPDATE admin SET a_password='".$password."'";
$q=mysqli_query($con,$query);

if($q){
    echo "<script>
    alert('rest Successfull');
    window.location.href='index.php';
    </script>";
}else
{
    echo "<script>
        alert('error');
        window.location.href='reset.php'</script>";
}


?>