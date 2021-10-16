<?php

session_start();
$title="ADMIN DASHBOARD";
if (!isset($_SESSION['email']))
{
  header("location: ../doctor-login.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
   <title>DOCTOR DASHBOARD</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/bootstrap-theme.css" rel="stylesheet">

  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  
</head>

<body>
  
  <section id="container" class="">
   

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      
      <a href="#" class="logo">DOCTOR<span class="lite">DASHBOARD</span></a>
  
      

      <div class="nav search-row" id="top_menu">
      
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
       
      </div>

      <div class="top-nav notification-row">
       
        <ul class="nav pull-right top-menu">

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php if (isset($_SESSION['email'])){echo $_SESSION['email'];}?> </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              
              <li>
                <a href="logoutdoc.php"><i class=""></i> Log Out</a>
              </li>
            </ul>
          </li>
          
        </ul>
        
      </div>
    </header>
  

    <aside>
      <div id="sidebar" class="nav-collapse ">
      
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          
          </li>
          <li class="sub-menu">
            <a class="" href="docviewprofile.php">
                          <i class="icon_genius"></i>
                          <span>View Profile</span>
            </a>
            <a class="" href="doctoreditprofile.php">
                <i class="icon_genius"></i>
                <span>Update Profile</span>
            </a>
        
            </li>
         
<li class="sub-menu">
            <a class="" href="viewDoctorAppointment.php">
                          <i class="icon_genius"></i>
                          <span>View Appointment</span>
            </a>
            <a class="" href="deletedoctorappointment.php">
                <i class="icon_genius"></i>
                <span>Delete Appointment</span>
            </a>
            <a class="" href="logoutdoc.php">
                <i class="icon_genius"></i>
                <span>Log out</span>
            </a>
        
            </li>
         
        </ul>
      
      </div>
    </aside>

      </section>
    </section>