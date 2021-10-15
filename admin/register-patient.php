<?php
session_start();
$title = "PATIENT REGISTER";
include "includes/header.php";
//include "../public/includes2/header.php";
//include "../public/includes2/navbar.php";


?>
 
<div class="container">
<link rel="stylesheet" href="css/login.css">
            <form class="form-horizontal" action="source/register-source.php" method="POST" role="form">
                <h2>PATIENT Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" placeholder="First Name" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" placeholder="Last Name" class="form-control" autofocus required>
                    </div>
                </div>
				<div class="form-group">
                        <label for="Address" class="col-sm-3 control-label">Address* </label>
                    <div class="col-sm-9">
                        <input type="text" name="Address" placeholder="Address" class="form-control" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="DOB" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" name="DOB" class="form-control" required>
                    </div>
                </div>
				<div class="form-group">
                        <label for="bloodgroup" class="col-sm-3 control-label">Blood group* </label>
                    <div class="col-sm-9">
                        <input type="text" name="bloodgroup" placeholder="Blood group" class="form-control" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="phoneNumber" placeholder="Phone number" class="form-control" required>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email"  placeholder="Email" class="form-control" name= "email" required>
                    </div>
                </div>
				
				
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
				<div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login-paitent.php" class="text-primary ml-2">Login</a></p>
                    </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
                    <!-- Social Login -->
                    <div class="form-group col-lg-12 mx-auto">
                        <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                            <i class="fa fa-facebook-f mr-2"></i>
                            <span class="font-weight-bold">Continue with Facebook</span>
                        </a>
                        <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">
                            <i class="fa fa-twitter mr-2"></i>
                            <span class="font-weight-bold">Continue with Twitter</span>
                        </a>
                    </div>

                    <!-- Already Registered -->
                   

                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../public/includes2/footer.php";
?>