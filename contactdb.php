<?php


$con=mysqli_connect('localhost','root','','charity');
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$query="INSERT INTO contact (c_name,c_email,c_subject,c_message) VALUES ('$name','$email','$subject','$message')";
$q=mysqli_query($con,$query);

if($q){
    echo "<script>
    alert('Thank for Contact Us');
    window.location.href='index.php';
    </script>";
}else
{
    echo "<script>
        alert('error');
        window.location.href='index.php'</script>";
}

?>