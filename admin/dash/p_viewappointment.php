<?php
  include ("headerpatient.php");
  include "../../db/dbconfig.php";
?>
<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> APPOINTMENT HISTORY</h3>
    </ol>
  </div>
</div>
        <div class="row">
          <div class="col-lg-12">
            </ol>
          </div>
        </div>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               VIEW APPOINTMENT HISTORY
              </header>


              <?php


              $sql="Select appoitments.appoitmentId AS APPOINTMENTID,appoitments.DoctorName AS DOCTORNAME,appoitments.specialization AS SPECILIZATION,appoitments.date AS DATE, appoitments.time AS TIME, register_patient.firstname AS FIRSTNAME, register_patient.lastname AS LASTNAME,register_patient.Address AS ADDRESS,register_patient.phoneNumber AS PHONENUMBER,register_patient.email AS EMAIL from appoitments
              join register_patient
              on appoitments.fkPatientId = register_patient.patientId  and appoitments.fkPatientId = fkPatientId";
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
  include ("footer.php");
?>



<!-- Select appoitments.appoitmentId AS APPOINTMENTID,appoitments.DoctorName AS DOCTORNAME,appoitments.specialization AS SPECILIZATION,appoitments.date AS DATE, appoitments.time AS TIME, register_patient.firstname AS FIRSTNAME, register_patient.lastname AS LASTNAME,register_patient.Address AS ADDRESS,register_patient.phoneNumber AS PHONENUMBER,register_patient.email AS EMAIL from appoitments
join register_patient
on appoitments.fkPatientId = register_patient.patientId -->
