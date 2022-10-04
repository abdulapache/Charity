<?php

include 'header.php';
include 'dbconnect.php';
$username=$row['d_username'];

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


        <h2 class="section-head mt-5">Donor Blood History</h2>
        <div class="col-7 mx-auto">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Group</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
<?php

$query="SELECT * FROM blood WHERE b_username='".$username."'";
$q=mysqli_query($con,$query);
while($row=mysqli_fetch_array($q)){

?>

  <tbody>
    <tr>
    <th scope="row"><?php echo $row['b_id']?></th>
      <th scope="row"><?php echo $row['b_name']?></th>
      <td scope="row"><?php echo $row['b_group']?></td>
      <th scope="row"><?php echo $row['b_date']?></th>
    </tr>
  </tbody>
    <?php
    
    }
    
    ?>
</table>
        </div>

  </div>







  <div class="row">


<h2 class="section-head mt-5">Donor Clothes History</h2>
<div class="col-7 mx-auto">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Male Quantity</th>
<th scope="col">Female Quantity</th>
<th scope="col">Brand</th>
</tr>
</thead>
<?php

$query1="SELECT * FROM clothes WHERE c_username='".$username."'";
$q1=mysqli_query($con,$query1);
while($row=mysqli_fetch_array($q1)){

?>

<tbody>
<tr>
<th scope="row"><?php echo $row['c_id']?></th>
<th scope="row"><?php echo $row['c_name']?></th>
<td scope="row"><?php echo $row['c_mquantity']?></td>
<th scope="row"><?php echo $row['c_fquantity']?></th>
<th scope="row"><?php echo $row['c_brand']?></th>
</tr>
</tbody>
<?php

}

?>
</table>
</div>

</div>







<div class="row">


<h2 class="section-head mt-5">Donor Money History</h2>
<div class="col-7 mx-auto">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Cash</th>
<th scope="col">Hospital</th>
</tr>
</thead>
<?php

$query2="SELECT * FROM money WHERE m_username='".$username."'";
$q2=mysqli_query($con,$query2);
while($row=mysqli_fetch_array($q2)){

?>

<tbody>
<tr>
<th scope="row"><?php echo $row['m_id']?></th>
<th scope="row"><?php echo $row['m_name']?></th>
<td scope="row"><?php echo $row['m_money']?></td>
<th scope="row"><?php echo $row['m_accountno']?></th>
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