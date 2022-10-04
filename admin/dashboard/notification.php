<?php

include 'dbconnect.php';
include 'header.php';
$query="SELECT * FROM request";
$q=mysqli_query($con,$query);
?>


<!-- <content........> -->
  <div class="col py-3 section mt-5">






        <h2 class="section-head">Pendding Request</h2>

<?php
while($row=mysqli_fetch_array($q)){

?>

        <div class="col-7 mx-auto shadow">
            <div class="text-center py-5 mt-4">
            <h1><?php echo $row['r_name']?></h1>
             <h5><?php echo $row['r_username']?></h5>
             <h6><?php echo $row['r_contact']?></h6>
            </div>
             <div class="text-center">
               <a href="approve.php?r=<?php echo $row['r_id']?>">
             <button class="btn btn-ouline-primary mb-3">Approve</button>
             </a>
             <a href="reject.php?r=<?php echo $row['r_id']?>">
             <button class="btn btn-ouline-primary mb-3">Reject</button>
              </a> 
             </div>
        </div>

        <?php
}
?>
      </div>


    </div>
  </div>





</body>
</html>