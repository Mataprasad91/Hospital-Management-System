<?php
session_start();
include "../../db/dbconfig.php";


?>



<?php


        if (isset($_POST['del_button']))
        {
           $id=$_POST['del_id'];

        $sql="DELETE from add_doctor  where d_id='$id' ";
        $query=mysqli_query($conn,$sql);

        var_dump($query);
        if($query)
        {
            
            header('location: ../dash/deletedoctor.php?msg=doctordelete');
        }
        else{
           header("location: ../dash/deletedoctor.php?DOCTORnotdeleted");
        }
      }
        ?>