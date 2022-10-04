<?php
include 'dbconnect.php';

$name=$_POST['name'];
$brand=$_POST['brand'];
$mquantity=$_POST['mquantity'];
$fquantity=$_POST['fquantity'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$query="INSERT INTO `clothes` (`c_name`, `c_brand`, `c_mquantity`, `c_fquantity`, `c_username`, `c_password`, `c_contact`, `c_address`, `c_gender`) VALUES ('$name','$brand',
'$mquantity','$fquantity','$username','$password','$contact','$address','$gender')";

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