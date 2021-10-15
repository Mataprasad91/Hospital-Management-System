<?php

$title="ADD DOCTOR";
include "header.php";

?>

<section id="main-content">
      <section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> ADD DOCTOR</h3>
        <?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url =="msg=DOCTORADDEDSUCCESSFULY") {
  echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>DOCTOR ADDED SUCCESSFULLY</strong> 
          </div>';
}

?>
      
   
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
       <h2>  DOCTOR DETAILS   </h2>
      </header>
      <div class="panel-body">
        <form class="form-horizontal " method="post" action="../source/adddoctor_source.php">
          <div class="form-group">
            <label class="col-sm-2 control-label">FIRST_NAME</label>
            <div class="col-sm-10">
              <input type="text" name=firstname class="form-control"  required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">LAST_NAME</label>
            <div class="col-sm-10">
              <input type="text" name="lastname"class="form-control" required>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">ADDRESS</label>
            <div class="col-sm-10">
              <input type="text" name="address" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">CONTACT</label>
            <div class="col-sm-10">
              <input type="text" name="phone" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">DOB</label>
            <div class="col-sm-10">
              <input type="date" name="dob" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Blood GROUP</label>
            <div class="col-sm-10">
              <input type="text" name="bloodgroup" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">DEPARTMENT</label>
            <div class="col-sm-10">
              <input type="text" name="specialization" class="form-control " required>
            </div>
          </div>
          <div class="form-group">            
            <label class="col-sm-2 control-label">EMAIL</label>
            <div class="col-sm-10">
              <input type="text" name="email" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">PASSWORD</label>
            <div class="col-sm-10">
              <input class="form-control" type="Password" name="password" required>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-10">
              <input type="submit" name="add doc" class="btn btn-primary  " value="ADD DOCTOR" required>
            </div>
          </div>
          </div>
        </form>
      </div>
    


<?php

include "footer.php";


?>