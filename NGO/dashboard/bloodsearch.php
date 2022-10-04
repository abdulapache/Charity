<?php
include 'header.php';
include 'dbconnect.php';
$search=$_POST['search'];
$query="SELECT * FROM blood WHERE b_name LIKE'%".$search."%'";
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
       <table class="table table-light table-responsive table-striped table-hover">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Name</th>
                 <th scope="col">Blood Group</th>
                 <th scope="col">gender</th>
                 <th scope="col">Hospital</th>
                 <th scope="col">Contact</th>
                 <th scope="col">Action</th>
                
               </tr>
             </thead>
             <tbody>
               <?php
                   while($row=mysqli_fetch_array($q)){
               ?>
               <tr>
                 <th scope="row"><?php echo $row['b_id']?></th>
                 <td> <a href="bloodprofile.php?r=<?php echo $row['b_id']?>"> <?php echo $row['b_name']?> </a> </td>
                 <td><?php echo $row['b_group']?></td>
                 <td><?php echo $row['b_gender']?></td>
                 <td><?php echo $row['b_hospital']?></td>
                 <td><?php echo $row['b_contact']?></td>
                 <td>
                  <button type="btn" class="btn btn-outline-primary">  <a href="bloodprofile.php?r=<?php echo $row['b_id']?>">View</a> </button>
                  <a href="bloodedit.php?r=<?php echo $row['b_id']?>">
                  <button type="btn" class="btn btn-outline-danger">Update</button>
                  </a>
                  <br>
                  <a href="blooddelete.php?r=<?php echo $row['b_id']?>">
                  <button type="btn" class="btn btn-outline-warning mt-2">Delete</button>
                  </a>
                 </td>
                 
               </tr>


               <?php
                   }
               ?>
             </tbody>
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
        <form class="form-inline d-flex" action="bloodsearch.php" method="post">
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
