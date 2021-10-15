<?php
include ("headerdoc.php");
include "../../db/dbconfig.php";
?>


<?php if (isset($_SESSION['email'])){ $doctorEmail = $_SESSION['email'];   }?>
<?php 
if(isset($_SESSION['email'])){
    $doctorEmail = $_SESSION['email']; 
    $sqlForDoc="SELECT * FROM add_doctor where email = '$doctorEmail'";
    // echo $sqlForDoc;
    $query2=mysqli_query($conn,$sqlForDoc);
    if(mysqli_num_rows($query2)>0){
        while($row=mysqli_fetch_assoc($query2))
        { 
            $doctorId = $row['d_id'];
            $firstName = $row['fname'];
            $lastName = $row['lname'];
         }
    }
}else{
        header("location: ../doctor-login.php");     
}

?>


<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i> APPOINTMENT LIST</h3>
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
                        VIEW APPOINTMENT
                    </header>
                    <?php
              $sqlAppt="Select appoitments.appoitmentId AS APPOINTMENTID,appoitments.DoctorName AS DOCTORNAME,appoitments.specialization AS SPECILIZATION,appoitments.date AS DATE, appoitments.time AS TIME, register_patient.firstname AS FIRSTNAME, register_patient.lastname AS LASTNAME,register_patient.Address AS ADDRESS,register_patient.phoneNumber AS PHONENUMBER,register_patient.email AS EMAIL from appoitments
              join register_patient
              on appoitments.fkPatientId = register_patient.patientId AND appoitments.DoctorName =  '$firstName $lastName' ";
            //   echo $sqlAppt;
              $queryAppt=mysqli_query($conn,$sqlAppt);
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
                               
                if(mysqli_num_rows($queryAppt)>0)
                { 
                     while($row=mysqli_fetch_assoc($queryAppt))
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