<?php
session_start();
include "../../db/dbconfig.php";
?>

<?php
        if (isset($_POST['del_button']))
        {
           $id=$_POST['del_id'];

        $sql="DELETE from appoitments  where appoitmentID='$id' ";
        $query=mysqli_query($conn,$sql);
        var_dump($query);
        if($query)
        {
            header('location: ../dash/deleteappointment.php?msg=appointmentDeleteSuccessfull');
        }
        else{
           header("location: ../dash/deleteappointment.php?appointmentDeleteUnsuccessfull");
        }
      }
        ?>