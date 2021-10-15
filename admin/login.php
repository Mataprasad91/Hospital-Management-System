<?php
//session_start();
$title = "ADMIN LOGIN";
include "includes/header.php";
?>
<?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url == "loginFailed") {
  echo '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>Invalid Username or Password</strong> Please check the entered username and password.
          </div>';
}

?>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="assets/image/admin.jpg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="source/login-source.php" method="POST">
          
          <u> <b>
              <h3>ADMIN LOGIN</h3>
            </b> </u>
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">EMAIL</label>
            <i class="fas fa-user"></i>
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="email" placeholder="email" />

          </div>
          
          <div class="form-outline mb-4">

            <label class="form-label" for="form1Example23">PASSWORD</label>
            <i class="fas fa-key"></i>
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" placeholder="Password" />
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
        </form>
      </div>
    </div>
  </div>
</section>



<?php
include "includes/footer.php";
?>