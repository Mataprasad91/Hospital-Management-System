<?php
include ("headerpatient.php");
include "../../db/dbconfig.php";
if (!isset($_SESSION['email']))
{
    header("location: ../login-paitent.php");

  }
// include "../allPatientFunction.php";

?>

<html>
    <body>
    <section id="main-content">
      <section style="padding:20px;margin-top:10px;">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">

                  <div class="follow-ava">
                    <img src="img/profile-widget-avatar.jpg" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">

                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">

                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">

                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                  <a data-toggle="tab" >
                                          <i class="icon-user"></i>
                                           MY PROFILE
                                      </a>
                  </li>
                  <li >


                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="recent-activity" class="tab-pane active">
                    <div class="profile-activity">
                    <section class="panel">
                    <?php  $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $db="hospitalmangsystem";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password,$db);
                        $sql="SELECT * FROM register_patient where patientId = 5";
                        $query=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($query)>0){
                            while($row=mysqli_fetch_assoc($query))
                            {
                               $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $address = $row['Address'];
                                $dob = $row['DOB'];
                                $bloodgroup = $row['bloodgroup'];
                                $phoneNumber = $row['phoneNumber'];
                                $email = $row['email'];

                           ?>
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>:<?php echo strtoupper($firstname); ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Last Name </span>:<?php echo strtoupper($lastname); ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Birthday</span>: <?php echo strtoupper($dob); ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Address </span>:<?php echo strtoupper($address); ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Blood Group </span>:<?php echo strtoupper($bloodgroup); ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>:<?php echo ($email); ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Mobile </span>:<?php echo strtoupper($phoneNumber); }} ?> </p>
                          </div>

                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>

                      </div>

                    </div>
                  </div>

                    </section>

                  </div>


                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>


      </section>
    </section>
</body>

</html>
