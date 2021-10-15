
<?php
  include "header.php";
  
  include "../../db/dbconfig.php";
?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> DELETE APPOINTMENTS</h3>
    <?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url == "msg=doctordelete") {
  echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>APPOINTMENT RECORD DELETED</strong> 
          </div>';
}

?>
    </ol>
  </div>
</div>
        <div class="row">
          <div class="col-lg-12">

          
          </div>
        </div>
        
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               DELETE APPOINTMENTS
              </header>
              <?php
           

           $sql="Select appoitments.appoitmentId AS APPOINTMENTID,appoitments.DoctorName AS DOCTORNAME,appoitments.specialization AS SPECILIZATION,appoitments.date AS DATE, appoitments.time AS TIME, register_patient.firstname AS FIRSTNAME, register_patient.lastname AS LASTNAME,register_patient.Address AS ADDRESS,register_patient.phoneNumber AS PHONENUMBER,register_patient.email AS EMAIL from appoitments
           join register_patient
           on appoitments.fkPatientId = register_patient.patientId";
           $query=mysqli_query($conn,$sql);
             ?>

              <table class="table table-striped table-advance table-hover">

                <head>
                  <tr>
                  <th>APPOITMENT ID</th>
                    <th>PATIENT'S NAME</th>
                    <th>PATIENT'S ADDRESS</th>
                    <th>PATIENT'S CONTACT</th>
                    <th>DOCTOR'S NAME</th>
                    <th>SPECILIZATION</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>EMAIL</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query)>0)
                {
                     while($row=mysqli_fetch_assoc($query))
                      {  
                      ?>

                <tr>
                <td> <?php echo $row['APPOINTMENTID']; ?></td>
                    <td> <?php echo $row['FIRSTNAME'] . " " .$row['LASTNAME'] ; ?></td>
                    <td> <?php echo $row['ADDRESS']; ?></td>
                    <td> <?php echo $row['PHONENUMBER']; ?></td>
                    <td> <?php echo $row['DOCTORNAME']; ?></td>
                    <td> <?php echo $row['SPECILIZATION']; ?></td>
                    <td> <?php echo $row['DATE']; ?></td>
                    <td> <?php echo $row['TIME']; ?></td>
                    <td> <?php echo $row['EMAIL']; ?></td>
                    <td>
                      <form action="../source/delappointment_source.php" method="POST" >
                        <input type="hidden" name="del_id" value="<?Php echo $row['APPOINTMENTID'] ?>">
                        <button type="submit" name="del_button" class="btn btn-danger">DELETE</a></button>
                      </form>
                    </td>
                    
                  </tr>
                  <?php
                     }

                }else{
                    echo"record is not view";
                }
                
                 ?>
               </tbody>
              </table>
            </section>
          </div>

 

<?php


  include "footer.php";
?>
