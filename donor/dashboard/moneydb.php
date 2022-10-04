<?php

include 'dbconnect.php';
$name=$_POST['name'];
$money=$_POST['money'];
// $accountno=$_POST['accountno'];
// $accountn=$_POST['accountn'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$status=$_POST['status'];
$gender=$_POST['gender'];


echo $query="INSERT INTO `money` ( `m_name`, `m_money`,  `m_username`, `m_password`, `m_contact`, `m_address`, `m_status`, `m_gender`)
 VALUES ('$name', '$money', '$username', '$password', '$contact', '$address', '$status', '$gender')";
 $q=mysqli_query($con,$query);
 if($q){
    echo "<script>
    alert('Your Donation Successfull');
    window.location.href='dashboard.php';
    </script>";
}else
{
    echo "<script>
        alert('error');
        window.location.href='dashboard.php'</script>";
}
?>