
<?php
  include "headerpatient.php";
  
  include "../../db/dbconfig.php";
?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i>Take Appointments</h3>
    <?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url == "msg=appointmentAddedSuccessfully") {
  echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>Appointment record updated</strong> 
          </div>';
}

?>
    </ol>
  </div>
</div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Add New Appointments
              </header>
              <div class="panel-body">
        <form class="form-horizontal " method="post" action="../source/Pappointment_source.php">
        <div class="form-group">
            <label class="col-sm-2 control-label">Doctors Name</label>
            <div class="col-sm-10">
            <select name="doctorName" class="form-control" id="">
                <option value="-1"> Select Doctors Name </option>
                <?php
                    $sqlForDoc = "SELECT * FROM add_doctor";
                    $query=mysqli_query($conn,$sqlForDoc);
                    if(mysqli_num_rows($query)>0)
                    {
                         while($row=mysqli_fetch_assoc($query))
                          {  
                            $fullName = $row['fname'].' '.$row['lname'];
                            // $name = $fullName;
                            echo '<option value="'.$fullName.'">'.$row['fname'].' '.$row['lname'].'</option>'; 
                          }
                    }
                   ?>  
             </select>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Doctors specialization</label>
            <div class="col-sm-10">
            <select name="doctorSpecilization" class="form-control" id="doctorSpecilization">
            <option value="-1"> Select Doctors Specialization </option>
                <?php
                    $sqlForDoc = "SELECT * FROM add_doctor";
                    // echo $sqlForDoc;
                    // echo $sql_contry;
                    // $rs_c = mysql_query($sql_contry);
                    // while ($row_c = mysql_fetch_array($rs_c)) {
                    //     echo '<option value="'.$row_c['fname'].'">'.$row_c['lname'].'</option>';  
                    // }
                    $query=mysqli_query($conn,$sqlForDoc);
                    if(mysqli_num_rows($query)>0)
                    {
                         while($row=mysqli_fetch_assoc($query))
                          {  
                            echo '<option value="'.$row['specialization'].'">'.$row['specialization'].'</option>'; 
                          }
                    }
                   ?>  
             </select>            
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <input type="text"  value=""  name="address" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="text"  value="" name="phoneNumber" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Date</label>
            <div class="col-sm-10">
              <input type="date" value=""  name="date" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Time Slot</label>
            <div class="col-sm-10">
              <input type="time" value=" " name="time" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="submit" name="update" class="btn btn-primary  " value="Add Apointment" required>
             
             <a href="editdoctor.php" class="btn btn-danger">Cancel</a>
           
            </div>
          </div>
          </div>
        </form>
      </div>
</section>
           
          </div>

 

<?php


  include "footer.php";
?>
