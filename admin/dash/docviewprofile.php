<?php
 include "headerdoc.php";
 INCLUDE "../../db/dbconfig.php";

?>
<?php if (isset($_SESSION['email'])){ $docEmail = $_SESSION['email']; echo "<script>console.log('Debug Objects: " . $_SESSION['email'] . "' );</script>";   }?> 

<section id="main-content">
      <section class="wrapper">
<div class="row"  style="margin-top: 15px;">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> <h2>View  PROFILE</h3>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        PROFILE  DETAILS
      </header>
      <?php
           $sql="SELECT * FROM add_doctor where email='$docEmail' ";
           $query=mysqli_query($conn,$sql);
           foreach($query as $row)
           {
              ?>         

      <div class="panel-body">
        <form class="form-horizontal " method="post" action="../source/editpatientprofile.php">
          <div class="form-group">
            <label class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo strtoupper($row['fname']);?>" name=edit_firstname readonly class="form-control"  required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" readonly value="<?php echo strtoupper($row['lname']);?>" name="edit_lastname"class="form-control" required>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <input type="text" readonly value="<?php echo $row['address'];?>"  name="edit_address" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-10">
              <input type="text"readonly  value="<?php echo $row['contact'];?>" name="edit_contact" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-10">
              <input type="date"readonly value="<?php echo $row['dob'];?>"  name="edit_dob" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Blood Group</label>
            <div class="col-sm-10">
              <input type="text"readonly  value="<?php echo $row['bloodgroup'];?>"  name="edit_bloodgroup" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Specialization</label>
            <div class="col-sm-10">
              <input type="text" readonly value="<?php echo $row['specialization'];?>"  name="edit_specialization" class="form-control " required>
            </div>
          </div>
         
          <div class="form-group">            
            <label class="col-sm-2 control-label">Email Id</label>
            <div class="col-sm-10">
              <input type="text" readonly   value="<?php echo $row['email'];?>" name="edit_email" class="form-control " required>
            </div>
          </div>
         
            </div>
          </div>
          </div>
        </form>
      </div>

<?php
           }
include "footer.php";

?>