
<?php

include 'dbconnect.php';
session_start();
if(!isset($_SESSION['id'])) header("Location:../logout.php");
$id=$_SESSION['id'];
$query="SELECT * FROM donors WHERE d_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AR Foundation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Sunday , 24 Hours
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +92 3025738783
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo me-auto">AR Foundations</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="dashboard.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#doctors">Team</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#doctors">Gallery</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="adminprofile.php?r=<?php echo $row['d_id']?>">Profile</a></li>
              <li><a href="../logout.php">Sign Out</a></li>
             
              <li><a href="setting.php">Setting</a></li>
              <li><a href="history.php">History</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#donate" class="appointment-btn scrollto"> Donate Now</a>

    </div>
  </header><!-- End Header -->
