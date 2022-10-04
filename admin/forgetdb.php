<?php

$con=mysqli_connect('localhost','root','','charity');
$username=$_POST['username'];
$query="SELECT * FROM admin WHERE a_username='".$username."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
$id=$row['a_id'];
if($row){
    echo "<script type='text/javascript'>;window.location.href='reset.php'</script>";
}
else{
	echo "<script type='text/javascript'>;window.location.href='index.php'</script>";
}


?>
