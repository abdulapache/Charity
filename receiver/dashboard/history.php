<?php

include 'header.php';
include 'dbconnect.php';
$username=$row['r_username'];

?>


<style>
.section{
	padding-top: 70px;
	padding-bottom: 70px;
}
.section h2.section-head{
	color: black;
	text-align: center;
	margin-bottom: 40px;
}
.section h2.section-head:after{
	background:#e74c3c;
	content: "";
	display: block;
	width: 100px;
	height: 3px;
	margin: 20px auto;
}

</style>

<!-- <content........> -->
  <div class="col py-3 section mt-5">



 <div class="row">


        <h2 class="section-head mt-5">All Details</h2>
        <div class="col-7 mx-auto">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Need</th>
      <th scope="col">Cause</th>
      <th scope="col">CNIC</th>
    </tr>
  </thead>
<?php

$query="SELECT * FROM receivery WHERE r_username='".$username."'";
$q=mysqli_query($con,$query);
while($row=mysqli_fetch_array($q)){

?>

  <tbody>
    <tr>
    <th scope="row"><?php echo $row['r_id']?></th>
      <th scope="row"><?php echo $row['r_name']?></th>
      <td scope="row"><?php echo $row['r_username']?></td>
      <th scope="row"><?php echo $row['r_need']?></th>
      <th scope="row"><?php echo $row['r_case']?></th>
      <th scope="row"><?php echo $row['r_cnic']?></th>
    </tr>
  </tbody>
    <?php
    
    }
    
    ?>
</table>
        </div>

  </div>











      </div>

    </div>
  </div>



</body>
</html>