<?php
session_start();
include "../../db/dbconfig.php";
?>

<?php
$db=mysqli_select_db($conn,'hospitalmangsystem');

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="select * from admin_login where email='$email' AND Admin_Password='$password'";
  $query=mysqli_query($conn,$sql);
  $rows = mysqli_num_rows($query);
  if($rows > 0){
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['admin_id']=$row->admin_id;
    $_SESSION['Admin_name']=$row->dmin_name;
    header("location: ../dash/dashboard.php");
  }
  else{
    header("location: ../login.php?loginFailed");
  }

}

?>