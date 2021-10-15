<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
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
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php getAllQueries( $_SESSION['email'])  ?></div>
              <div class="title">No. of Queries</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->

    <!--main content start-->
   
        <!-- page end-->
      </section>
    </section>