<?php
session_start();
 include "../../db/dbconfig.php";
 
?>
<?php if (isset($_SESSION['email'])){ $patientEmail = $_SESSION['email'];   }?> 

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
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
    
    $doctorName=$_POST['doctorName'];
    $doctorSpecilization=$_POST['doctorSpecilization'];
    $address=$_POST['address'];
    $phoneNumber=$_POST['phoneNumber'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $patientIdNew =$patientId;
    echo "<script>console.log('patientId Objects: " . $doctorName . "' );</script>";
    $insertquery="insert into appoitments (DoctorName , specialization , date , time , fkPatientId) 
    values('$doctorName','$doctorSpecilization','$date','$time','$patientIdNew')" ;
    $iquery=mysqli_query($conn,$insertquery);
    // echo $insertquery;
    // echo $iquery;
    if($iquery){
        echo '<script>alert("Appointment Done")';
        // header("location: ../patientdashboard.php?appointmentBook");
        header('location: ../dash/patientdashboard.php?msg=appointmentbook');
    }
    else{
        echo mysqli_error($conn);
    }

    }
?> 
