<?php
session_start();
include "../../db/dbconfig.php";
?>

<?php
        if (isset($_POST['del_button']))
        {
           $id=$_POST['del_id'];

        $sql="DELETE from register_patient  where patientId='$id' ";
        $query=mysqli_query($conn,$sql);
        var_dump($query);
        if($query)
        {
            
            header('location: ../dash/deletePatients.php?msg=patientDeleteSuccessfull');
        }
        else{
           header("location: ../dash/deletePatients.php?patientDeleteUnSuccessfull");
        }
      }
        ?>