<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Christ University</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
  <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <h2>Christ</h2>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="assets/images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?php $myusername=$_SESSION['login_user'];
                echo $myusername; 
                ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
              

              </ul>

            </div>
          </nav>
        
          <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">

                <li class="nav-item">
                  <a class="nav-link" href="index.php">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#general-pages1" aria-expanded="false" aria-controls="general-pages1">
                    <span class="menu-title">Students</span>
                    <i class="menu-arrow"></i>
                    
                  </a>
                  <div class="collapse" id="general-pages1">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="alldiscover.php">All Students</a></li>
                      <li class="nav-item"> <a class="nav-link" href="adddiscover.php">Add Students</a></li>
                    </ul>
                  </div>
                </li>
                
                
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
