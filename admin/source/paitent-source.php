
<?php
session_start();
include "../../db/dbconfig.php";
?>

<?php
$db=mysqli_select_db($conn,'hospitalmangsystem');

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="select * from register_patient where email='$email' AND password='$password'";
  $query=mysqli_query($conn,$sql);
  $rows = mysqli_num_rows($query);
  var_dump($sql);
  if($rows > 0){
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['email'] = $email;

    echo "Success";
   header("location: ../dash/patientdashboard.php");
  }
  else{
      mysqli_error($conn);
   header("location: ../login-paitent.php?LoginFailed");
  }

}

?>
