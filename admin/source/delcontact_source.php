<?php
session_start();
include "../../db/dbconfig.php";


?>



<?php


        if (isset($_POST['del_button']))
        {
           $id=$_POST['del_id'];
        $sql="DELETE from viewcontacts  where id='$id' ";
        $query=mysqli_query($conn,$sql);
         echo $id;
        var_dump($query);
        if($query)
        {
            
            header('location: ../dash/viewcontact.php?msg=contactdeleted');
        }
        else{
           header("location: ../dash/viewcontact.php?contactnotdeleted");
        }
      }
        ?>