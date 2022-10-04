<?php
include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM blood WHERE b_id='".$id."'";
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
            <img src="../assets/img/blood.jpg" class="rounded mx-auto d-block rounded-circle" style="width: 150px; height: 150px;" alt="...">
        <h1 style="text-align: center;"><?php echo $row['b_name']?></h1>
        <hr>
        <table class="table table-light">
          <tbody>
            <tr>
              <th scope="col">Blood Group</th>
              <td><?php echo $row['b_group']?></td>
            </tr>
            <tr>
              <th scope="col">Botle Quantity</th>
              <td><?php echo $row['b_botle']?></td>
            </tr>
            <tr>
              <th scope="col">Hospital</th>
              <td><?php echo $row['b_hospital']?></td>
            </tr>
            <tr>
              <th scope="col">UserName</th>
              <td><?php echo $row['b_username']?></td>
            </tr>
            <tr>
              <th scope="col">Password</th>
              <td><?php echo $row['b_password']?></td>
            </tr>
            <tr>
              <th scope="col">Contact</th>
              <td><?php echo $row['b_contact']?></td>
            </tr>
            <tr>
              <th scope="col">Address</th>
              <td><?php echo $row['b_address']?></td>
            </tr>
            <tr>
              <th scope="col">Date</th>
              <td><?php echo $row['b_date']?></td>
            </tr>
            <tr>
              <th scope="col">Gender</th>
              <td><?php echo $row['b_gender']?></td>
            </tr>
          </tbody>
        </table>
        <a href="blooddelete.php?r=<?php echo $row['b_id']?>">
        <button class="btn btn-outline-primary">Delete</button>
      </a>
      <a href="bloodedit.php?r=<?php echo $row['b_id']?>">
        <button class="btn btn-outline-primary float-end">Edit</button>
        </a>
      </div>
            </div>
        </div>
    </div>
</body>
</html>