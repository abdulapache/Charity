<?php
include 'dbconnect.php';

$name=$_POST['name'];
$group=$_POST['group'];
$botle=$_POST['botle'];
$username=$_POST['username'];
$password=$_POST['password'];
$hospital=$_POST['hospital'];
$contact=$_POST['contact'];
$cnic=$_POST['cnic'];
$address=$_POST['address'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$query="INSERT INTO `blood` (`b_name`, `b_group`, b_botle, `b_hospital`, `b_username`, `b_password`, `b_contact`, `b_cnic`, `b_address`, b_date, `b_gender`) VALUES
 ('$name', '$group', '$botle', '$hospital', '$username', '$password', '$contact', '$cnic', '$address', '$date', '$gender')";

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