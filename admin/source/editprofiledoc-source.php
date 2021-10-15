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
        $Specialization=$_POST['edit_specialization'];
        $Email=$_POST['edit_email'];

        $sqlForId="SELECT * FROM add_doctor where email='$Email' ";
        $queryForId=mysqli_query($conn,$sqlForId);
        echo $sql;
        if(mysqli_num_rows($queryForId)>0){
         while($rowForId=mysqli_fetch_assoc($queryForId))
         { 
           $id = $rowForId['d_id'];
           echo $id;
         }
        }
        var_dump($id);
        //var_dump($Bloodgroup);

        $sql="UPDATE add_doctor  SET contact='$Contact',address='$Address',dob='$Dob',bloodgroup='$Bloodgroup',specialization='$Specialization',email='$Email' where d_id=$id ";
        $query=mysqli_query($conn,$sql);
        
        if($query)
        {
            
            header('location: ../dash/docviewprofile.php?msg=doctorProfileUpdated');
        }
        else{
           header("location: ../dash/doctoreditprofile.php?doctorfailedtoupdate");
        }
      }
        ?>