

<?php
       
       function getAllAppointment($){
           $servername = "localhost";
           $username = "root";
           $password = "";
           $db="hospitalmangsystem";

           // Create connection
           $conn = mysqli_connect($servername, $username, $password,$db);
           $sql="SELECT COUNT(1) AS NOOFCONTACTS FROM appoitments where fkPatientId = $patientID";

           $query=mysqli_query($conn,$sql);
           if(mysqli_num_rows($query)>0){
               while($row=mysqli_fetch_assoc($query))
               { 
                   $numberOfContac = $row['NOOFCONTACTS'];
                }
           }
           echo $numberOfContac;
       }

       function getAllQueries($emailId){
           $servername = "localhost";
           $username = "root";
           $password = "";
           $db="hospitalmangsystem";

           // Create connection
           $conn = mysqli_connect($servername, $username, $password,$db);
           $sql="SELECT COUNT(1) AS NOOFAPPOINT FROM viewcontacts where  email='$emailId'";

           $query=mysqli_query($conn,$sql);
           if(mysqli_num_rows($query)>0){
               while($row=mysqli_fetch_assoc($query))
               { 
                   $numberOfContac = $row['NOOFAPPOINT'];
                }
           }
           echo $numberOfContac;
       }
       function getDoctors(){
           $servername = "localhost";
           $username = "root";
           $password = "";
           $db="hospitalmangsystem";

           // Create connection
           $conn = mysqli_connect($servername, $username, $password,$db);
           $sql="SELECT COUNT(1) AS NOOFDOCTORS FROM add_doctor";
           $query=mysqli_query($conn,$sql);
           if(mysqli_num_rows($query)>0){
               while($row=mysqli_fetch_assoc($query))
               { 
                   $numberOfContac = $row['NOOFDOCTORS'];
                }
           }
           echo $numberOfContac;
       }
       function getPatients(){
           $servername = "localhost";
           $username = "root";
           $password = "";
           $db="hospitalmangsystem";

           // Create connection
           $conn = mysqli_connect($servername, $username, $password,$db);
           $sql="SELECT COUNT(1) AS NOOFPATIENTS FROM register_patient";
           $query=mysqli_query($conn,$sql);
           if(mysqli_num_rows($query)>0){
               while($row=mysqli_fetch_assoc($query))
               { 
                   $numberOfContac = $row['NOOFPATIENTS'];
                }
           }
           echo $numberOfContac;
       }
             
               
?>