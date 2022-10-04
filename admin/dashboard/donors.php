<?php

include 'dbconnect.php';
include 'header.php';
$query="SELECT * FROM donors";
$q=mysqli_query($con,$query);
?>


<!-- <content........> -->
  <div class="col py-3 section">




  <div class="content">
   <a href="#" data-bs-toggle="modal" data-bs-target="#search">
      <button class="btn btn-outline-primary rounded-circle mt-2"><i class="fa fa-search"></i></button>
   </a> 
</div>  





        <h2 class="section-head">All Donor</h2>
        <div class="col-7 mx-auto">
         <table class="table table-light table-responsive table-striped table-hover">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Name</th>
                 <th scope="col">Contact</th>
                 <th scope="col">CNIC</th>
                 <th scope="col">Address</th>
                 <th scope="col">Gender</th>
                 <th scope="col">Action</th>
                
               </tr>
             </thead>
             <tbody>
               <?php
                   while($row=mysqli_fetch_array($q)){
               ?>
               <tr>
                 <th scope="row"><?php echo $row['d_id']?></th>
                 <td> <?php echo $row['d_name']?> </td>
                 <td><?php echo $row['d_contact']?></td>
                 <td><?php echo $row['d_cnic']?></td>
                 <td><?php echo $row['d_address']?></td>
                 <td><?php echo $row['d_gender']?></td>
                 <td>
                  <button type="btn" class="btn btn-outline-primary">  <a href="donorsprofile.php?r=<?php echo $row['d_id']?>">View</a> </button>
                  <a href="donoredit.php?r=<?php echo $row['d_id']?>">
                  <button type="btn" class="btn btn-outline-danger">Update</button>
                  </a>
                  <a href="donordelete.php?r=<?php echo $row['d_id']?>">
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




        </form> 
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
        <form class="form-inline d-flex" action="donorsearch.php" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>



</body>
</html>