<?php
$con=mysqli_connect('localhost','root','','charity');
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM receivery WHERE r_username='".$username."' AND r_password='".$password."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
$id=$row['r_id'];
if($row){
    echo "<script type='text/javascript'>;window.location.href='dashboard/dashboard.php'</script>";
    session_start();
    $_SESSION['id']=$id;
}
else{
    echo "<script type='text/javascript'>;window.location.href='index.php'</script>";
}

?>