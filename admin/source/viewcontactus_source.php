<?php

 include "../../db/dbconfig.php";
?>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $City=$_POST['city'];
    $phone=$_POST['contact'];

    $email=mysqli_escape_string($conn, $_POST['email']);
    $subject=$_POST['subject'];


            $insertquery="insert into viewcontacts(first_name , last_name ,city  ,contact, email , subject  )
            values('$firstname','$lastname','$City','$phone','$email','$subject')" ;
            $iquery=mysqli_query($conn,$insertquery);
            if($iquery){

                header('location: ../contact-form.php?msg=submittedsuccesfully');

            }
            else{
                header('location: ../contact-form.php?msg= not submitted ');
            }



    }






?>
