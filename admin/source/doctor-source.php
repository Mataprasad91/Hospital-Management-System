<?php
 session_start();
 include "../../db/dbconfig.php";
?>

<?php
$db=mysqli_select_db($conn,'hospitalmangsystem');
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST['doctorname'];
  $Password=$_POST['doctorpassword'];

  $sql="SELECT* FROM add_doctor WHERE email='$username' AND password='$Password'";
  $query=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($query);
  if($row > 0){
      $_SESSION['isLoggedln']=true;
      $_SESSION['email'] = $username;
      $_SESSION['doctorname']=$username;
      header("location:  ../dash/doctordashboard.php?msg=LoginSuccessfull");
    }
      else{

        header("location: ../doctor-login.php?loginFailed");

      }


  }


?>



