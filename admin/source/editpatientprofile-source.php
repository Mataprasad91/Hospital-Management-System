<?php
session_start();
include "../../db/dbconfig.php";

?>
<?php

if(isset($_POST['update']))
      {
        
       

        $firstname=$_POST['edit_firstname'];
        $lastname=$_POST['edit_lastname'];
        $Address=$_POST['edit_address'];
        $Contact=$_POST['edit_contact'];
        $Dob=$_POST['edit_dob'];
        $Bloodgroup=$_POST['edit_bloodgroup'];
        $Email=$_POST['edit_email'];
        $password=$_POST['edit_password'];

        $sqlForId="SELECT * FROM register_patient where email='$Email' ";
        $queryForId=mysqli_query($conn,$sqlForId);
        echo $sql;
        if(mysqli_num_rows($queryForId)>0){
         while($rowForId=mysqli_fetch_assoc($queryForId))
         { 
           $id = $rowForId['patientId'];
           echo $id;
         }
        }
        var_dump($id);
        //var_dump($Bloodgroup);

        $sql="UPDATE register_patient  SET firstname='$firstname',lastname='$lastname', phoneNumber='$Contact',Address='$Address',DOB='$Dob',bloodgroup='$Bloodgroup',email='$Email' where patientId=$id ";
        $query=mysqli_query($conn,$sql);
        
        if($query)
        {
            
            header('location: ../dash/p_viewprofile.php?msg=patientProfileUpdated');
        }
        else{
           header("location: ../dash/p_editprofile.php?patientfailedtoupdate");
        }
      }
        ?>