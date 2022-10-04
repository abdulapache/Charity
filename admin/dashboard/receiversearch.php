<?php
include 'header.php';
include 'dbconnect.php';
$search=$_POST['search'];
$query="SELECT * FROM receivery WHERE r_name LIKE'%".$search."%'";
$q=mysqli_query($con,$query);

?>



<div class="col p-3 section">
<div class="content">
 <a href="teamform.php">
<button class="btn btn-outline-primary d-block rounded-circle"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
</a> 
   <a href="#" data-bs-toggle="modal" data-bs-target="#search">
      <button class="btn btn-outline-primary rounded-circle mt-2"><i class="fa fa-search"></i></button>
   </a> 
</div>  



<h2 class="section-head">Blood Details</h2>
       <div class="col-7 mx-auto">
       <table class="table table-light">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">CNIC</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Phone</th>
                <th scope="col">Need</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

<?php
while($row=mysqli_fetch_array($q)){

?>

            <tbody>
              <tr>
                <th scope="row"><?php echo $row['r_id']?></th>
                <td> <a href="receiverprofile.php?r=<?php echo $row['r_id']?>"> <?php echo $row['r_name']?></a> </td>
                <td><?php echo $row['r_cnic']?></td>
                <td><?php echo $row['r_username']?></td>
                <td><?php echo $row['r_password']?></td>
                <td><?php echo $row['r_contact']?></td>
                <td><?php echo $row['r_need']?></td>
                <td>
                  <button type="btn" class="btn btn-outline-primary">  <a href="receiverprofile.php?r=<?php echo $row['r_id']?>">View</a> </button>
                  <a href="receiveredit.php?r=<?php echo $row['r_id']?>">
                  <button type="btn" class="btn btn-outline-danger">Update</button>
                  </a>
                  <br>
                  <a href="receiverdelete.php?r=<?php echo $row['r_id']?>">
                  <button type="btn" class="btn btn-outline-warning mt-2">Delete</button>
                  </a>
                 </td>
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


<div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="form-inline d-flex" action="receiversearch.php" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
