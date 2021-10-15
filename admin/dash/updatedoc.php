<?php
 include "header.php";
 INCLUDE "../../db/dbconfig.php";


?>

<section id="main-content">
      <section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> <h2>UPDATE DOCTOR<</h3>
      
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        DOCTOR DETAILS
      </header>
      <?php
        if (isset($_POST['edit_button']))
        {
           $id=$_POST['edit_id'];
           
           $sql="SELECT * FROM add_doctor where d_id='$id' ";
           $query=mysqli_query($conn,$sql);
           foreach($query as $row)
           {

              ?>         
        
      <div class="panel-body">
        <form class="form-horizontal " method="post" action="../source/editdoc.php">
          <div class="form-group">
            <input type="hidden" name="edit_id"  value="<?php echo $row['d_id'];?>">
            <label class="col-sm-2 control-label">FIRST_NAME</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row['fname'];?>" name=edit_firstname class="form-control"  required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">LAST_NAME</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row['lname'];?>" name="edit_lastname"class="form-control" required>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">ADDRESS</label>
            <div class="col-sm-10">
              <input type="text"  value="<?php echo $row['address'];?>"  name="edit_address" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">PHONE</label>
            <div class="col-sm-10">
              <input type="text"  value="<?php echo $row['contact'];?>" name="edit_contact" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">DOB</label>
            <div class="col-sm-10">
              <input type="date" value="<?php echo $row['dob'];?>"  name="edit_dob" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Blood GROUP</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row['bloodgroup'];?>"  name="edit_bloodgroup" class="form-control " required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">DEPARTMENT</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row['specialization'];?>"  name="edit_specialization" class="form-control " required>
            </div>
          </div>
          <div class="form-group">            
            <label class="col-sm-2 control-label">EMAIL</label>
            <div class="col-sm-10">
              <input type="text"   value="<?php echo $row['email'];?>" name="edit_email" class="form-control " required>
            </div>
          </div>
        
          
          <div class="form-group">
            <div class="col-sm-10">
              <input type="submit" name="update" class="btn btn-primary  " value="UPDATE" required>
             
             <a href="editdoctor.php" class="btn btn-danger">CANCEL</a>
           
           <?php
            }
        }    
            
?>
             
            </div>
          </div>
          </div>
        </form>
      </div>
    
      
      

<?php

include "footer.php";

?>