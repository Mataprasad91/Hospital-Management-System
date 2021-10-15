<?php
session_start();
include "../../db/dbconfig.php";
?>
<?php

if(isset($_POST['update']))
      {
        $id=$_POST['edit_id'];
        $firstname=$_POST['edit_firstname'];
        $lastname=$_POST['edit_lastname'];
        $Address=$_POST['edit_address'];
        $Contact=$_POST['edit_contact'];
        $Dob=$_POST['edit_dob'];
        $Bloodgroup=$_POST['edit_bloodgroup'];
        $Specialization=$_POST['edit_specialization'];
        $Email=$_POST['edit_email'];
         
        //var_dump($Contact);
        //var_dump($Bloodgroup);

        $sql="UPDATE add_doctor  SET fname='$firstname',lname='$lastname',address='$Address',contact='$Contact',dob='$Dob',bloodgroup='$Bloodgroup',specialization='$Specialization',email='$Email' where d_id='$id' ";
        $query=mysqli_query($conn,$sql);
        if($query)
        {
            
            header('location: ../dash/editdoctor.php?msg=doctorUpdated');
        }
        else{
           header("location: ../dash/editdoctor.php?DOCTOR RECORD IS NOT UPDATED");
        }
      }
        ?>