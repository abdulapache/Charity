<?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['id'])) header("Location:../logout.php");
$id=$_SESSION['id'];
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



<!-- <header........>-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">AR Donation Club</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donors.php">Donors</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="bdonor.php">Blood</a></li>
            <li><a class="dropdown-item" href="mdonor.php">Money</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cdonor.php">Clothes</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="receiver.php">Receivers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Notification.php">Notification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Team</a>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="adminprofile.php?r=<?php echo $row['a_id']?>"> <img src="../assets/img/<?php echo $row['a_img']?>"  width="30" height="30" class="rounded-circle">
              <span class="d-none d-sm-inline mx-1"><?php echo $row['a_name']?></span></a></li>
            <li><a class="dropdown-item" href="setting.php"><i class="fa fa-cogs" aria-hidden="true"></i>  Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logout.php">Logout   <i class="fa fa-sign-out" aria-hidden="true"></i></a>
            
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- </header........>  -->



  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto sidebar col-md-3 col-xl-2 px-sm-2 px-1 bg-light mt-1 shadow">

<!-- <sidebar.................> -->

            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
              <h2>AR Donation Club</h2>
              <div class="admin-img col-md-3">
                <img src="../assets/img/<?php echo $row['a_img']?>">
              </div>
                <a href="dashboard.php" class="admin d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Rahman</span>
                </a>
               
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-3" id="menu">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link align-middle px-0 text-black">
                          <i class="fa fa-tachometer" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li>
                      <a href="donors.php" class="nav-link px-0 align-middle">
                        <i class="fa fa-users" aria-hidden="true"></i>  <span class="d-none d-sm-inline">Donors</span></a>
                  </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fa fa-briefcase" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Services</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="collapse hidden nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="bdonor.php" class="nav-link px-0"><i class="fa fa-tint" aria-hidden="true"></i> <span class="d-none d-sm-inline">Blood</span></a>
                            </li>
                            <li>
                                <a href="mdonor.php" class="nav-link px-0"><i class="fa fa-usd" aria-hidden="true"></i> <span class="d-none d-sm-inline">Money</span></a>
                            </li>
                            <li>
                              <a href="cdonor.php" class="nav-link px-0"><i class="fa fa-briefcase" aria-hidden="true"></i> <span class="d-none d-sm-inline">Clothes</span></a>
                          </li>
                        </ul>
                    </li>
                    <li>
                      <a href="receiver.php" class="nav-link px-0 align-middle">
                        <i class="fa fa-users" aria-hidden="true"></i>  <span class="d-none d-sm-inline">Receivers</span></a>
                  </li>
                    <li>
                        <a href="notification.php" class="nav-link px-0 align-middle">
                          <i class="fa fa-users" aria-hidden="true"></i>  <span class="d-none d-sm-inline">Notification</span></a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav-link px-0 align-middle">
                          <i class="fa fa-users" aria-hidden="true"></i>  <span class="d-none d-sm-inline">Contact Us</span></a>
                    </li>
                    <li>
                      <a href="team.php" class="nav-link px-0 align-middle">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>    <span class="d-none d-sm-inline">Team</span> </a>
                  </li>

                </ul>
              
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/<?php echo $row['a_img']?>" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php echo $row['a_name']?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="adminprofile.php?r=<?php echo $row['a_id']?>">Profile</a></li>
                        <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                        <li><a class="dropdown-item" href="setting.php">Setting</a></li>
                    </ul>
                </div>
            </div>
        </div>


 <!-- </sidebar.................> -->

