<?php
session_start();
include "../../db/dbconfig.php";
?>

<?php
        if (isset($_POST['del_button']))
        {
           $id=$_POST['del_id'];

        $sql="DELETE from appoitments  where appoitmentId='$id' ";
        $query=mysqli_query($conn,$sql);
        var_dump($query);
        if($query)
        {
            
            header('location: ../dash/deletedoctorappointment.php?msg=doctordelete');
        }
        else{
           header("location: ../dash/deletedoctorappointment.php?appointmentDeleteUnSuccessfull");
        }
      }
        ?>