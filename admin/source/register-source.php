<?php
 session_start();
 include "../../db/dbconfig.php";
?>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $address=$_POST['Address'];
    $DOB=$_POST['DOB'];
    $bloodgroup=$_POST['bloodgroup'];
    $phone=$_POST['phoneNumber'];
    $email=mysqli_escape_string($conn, $_POST['email']); 
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

  
    if($password === $cpassword){
        
        $emailCheck = "SELECT * FROM register_patient WHERE email = '$email' ";
        $result = mysqli_query($conn, $emailCheck);
        echo mysqli_error($conn);
            $insertquery="insert into register_patient (firstname , lastname , Address , DOB , bloodgroup ,phoneNumber, email , password , cfpass ) 
            values('$firstname','$lastname','$address','$DOB','$bloodgroup','$phone','$email','$password','$cpassword')" ;
            $iquery=mysqli_query($conn,$insertquery);
            if($iquery){
                echo '<script>alert("Registration Done")';
                header("location: ../login-paitent.php?registrationSuccess");
            }
            else{
                echo mysqli_error($conn);
            }
            
        
    }
   
    
   

   

    }
?> 
