<?php
session_start();
$title="PATIENT DASHBOARD";
if (!isset($_SESSION['email']))
{
  header("location: ../login-paitent.php");

}else{
  $patientEmail = $_SESSION['email'];
}
include "../allPatientFunction.php";
include "../../db/dbconfig.php";
?>

<?php
if(isset($_SESSION['email'])){

  $sql1="SELECT * FROM register_patient where email = '$patientEmail'";
  // echo $sql1;
  $query1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($query1)>0){
      while($row=mysqli_fetch_assoc($query1))
      {
          $patientId = $row['patientId'];
       }
  }

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
   <title>PATIENT DASHBOARD</title>



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


      <a href="#" class="logo">PATIENT<span class="lite">DASHBOARD</span></a>


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
                <a href="logoutpatient.php"><i class=""></i> Log Out</a>
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
            <a class="" href="patientdashboard.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="P_viewprofile.php" class="">
                          <i class=""></i>
                          <span>View Profile</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="p_editprofile.php" class="">
                          <i class=""></i>
                          <span>Update Profile</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="P_appointment.php" class="">
                          <i class=""></i>
                          <span>Book Appointment</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="p_viewappointment.php" class="">
                          <i class=""></i>
                          <span>View Appointment</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="logoutpatient.php" class="">

                          <span>Log Out</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>


          </li>
        </ul>
      </div>
    </aside>

      </section>
    </section>
    <section id="main-content">
      <section class="wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="#">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count"><?php  getAllAppointment($patientId) ?></div>
              <div class="title">NO.OF Appointment</div>
            </div>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php getAllQueries( $_SESSION['email'])  ?></div>
              <div class="title">No. of Queries</div>
            </div>

          </div>

          </div>


        </div>

      </section>
    </section>