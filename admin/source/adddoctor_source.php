<?php
 
 include "../../db/dbconfig.php";
?>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $DOB=$_POST['dob'];
    $bloodgroup=$_POST['bloodgroup'];
    $specialization=$_POST['specialization'];
    $email=mysqli_escape_string($conn, $_POST['email']); 
    $password=$_POST['password'];
    

            $insertquery="insert into add_doctor(fname , lname , address , contact, dob , bloodgroup , specialization, email , password  ) 
            values('$firstname','$lastname','$address','$phone','$DOB','$bloodgroup',' $specialization','$email','$password')" ;
            $iquery=mysqli_query($conn,$insertquery);
            if($iquery){
                
                header('location: ../dash/Adddoctor.php?msg=DOCTORADDEDSUCCESSFULY');
               
            }
            else{
                
                header('location: ../dash/Adddoctor.php?msg="DOCTORADDEDFAILED');
            }
            
            
        
    }
   
    
   

    //    if($emailcount > 0){
    //        echo "email already exist";
    //    }
    //    else{
    //            $insertquery="insert into register_user(firstname , lastname , Address , DOB , bloodgroup , phonenumber , email , password , cfpass ) 
    //            values('$firstname','$lastname','$address','$address','$DOB','$bloodgroup','$bloodgroup','$phone','$phone','$email','$password','$cpassword')" ;
    //            $iquery=mysqli_query($conn,$insertquery);
    //            echo  "registration successful";

    //     }

    
?> 
