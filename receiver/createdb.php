
<?php

include 'dashboard/dbconnect.php';
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$cnic=$_POST['cnic'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$gender=$_POST['gender'];


$query="INSERT INTO `request` (`r_name`, `r_username`, `r_password`, `r_cnic`, `r_contact`, `r_city`, `r_address`, `r_gender`) 
VALUES ('$name', '$username', '$password', '$cnic', '$contact', '$city', '$address', '$gender')";
//  $q=mysqli_query($con,$query);
//  if($q){
//     echo "<script>
//         alert('Your request is submitted plz wait admin approve this request');
//         window.location.href='index.php';
//         </script>";
// }
// else{
//     echo "<script>
//     alert('network error');
//     window.location.href='create.php';
//     </script>";
// }

?>
