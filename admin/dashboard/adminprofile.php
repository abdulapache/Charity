<?php
include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM admin WHERE a_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
?>



<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="modal-body">
              <a href=""  data-bs-toggle="modal" data-bs-target="#profile">
        <img src="../assets/img/<?php echo $row['a_img']?>" class="rounded mx-auto d-block rounded-circle" style="width: 150px; height: 150px;" alt="...">
        </a>
        <h1 style="text-align: center;"><?php echo $row['a_name']?></h1>
        <hr>
        <table class="table table-light">
          <tbody>
            <tr>
              <th scope="col">UserName</th>
              <td><?php echo $row['a_username']?></td>
            </tr>
            <tr>
              <th scope="col">Password</th>
              <td><?php echo $row['a_password']?></td>
            </tr>
            <tr>
              <th scope="col">Contact</th>
              <td><?php echo $row['a_contact']?></td>
            </tr>
            <tr>
              <th scope="col">Address</th>
              <td><?php echo $row['a_address']?></td>
            </tr>
            <tr>
              <th scope="col">Gender</th>
              <td><?php echo $row['a_gender']?></td>
            </tr>
          </tbody>
        </table>
        <a href="setting.php">
        <button class="btn btn-outline-primary">Setting</button>
      </a>
      </div>
            </div>
        </div>
    </div>





<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../assets/img/<?php echo $row['a_img']?>">View</a>
        </li>
        <li class="nav-item">
          <a href="#"  data-bs-toggle="modal" data-bs-target="#upload">
          Change Profile
          </a>
        </li>
</ul>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="chngimg.php" method="POST" enctype="multipart/form-data">
      <ul class="navbar-nav">
        <li class="nav-item">
          <label>Choose The Picture</label><br>
          <input type="file" name="pic">
        </li>
</ul>
<div class="text-center mt-3">

<button class="btn" type="btn btn-outline-success">Change</button>
</div>
</form>
      </div>
    </div>
  </div>
</div>









</body>
</html>