<?php
 include "headerdoc.php";
 INCLUDE "../../db/dbconfig.php";

?>
<?php if (isset($_SESSION['email'])){ $docEmail = $_SESSION['email']; echo "<script>console.log('Debug Objects: " . $_SESSION['email'] . "' );</script>";   }?>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-text-o"></i>
                    <h2>UPDATE PROFILE
                </h3>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        PROFILE DETAILS
                    </header>
                    <?php
           $sql="SELECT * FROM add_doctor where email='$docEmail' ";
           $query=mysqli_query($conn,$sql);
        //    echo $sql;
           if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query))
            { 
               ?>
                    <div class="panel-body">
                        <form class="form-horizontal " method="post" action="../source/editprofiledoc-source.php">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly value="<?php echo strtoupper($row['fname']);?>"
                                        name=edit_firstname class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly value="<?php echo strtoupper($row['lname']);?>"
                                        name="edit_lastname" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $row['address'];?>" name="edit_address"
                                        class="form-control " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $row['contact'];?>" name="edit_contact"
                                        class="form-control " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Date Of Birth</label>
                                <div class="col-sm-10">
                                    <input type="date" value="<?php echo $row['dob'];?>" name="edit_dob"
                                        class="form-control " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Blood Group</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo $row['bloodgroup'];?>" name="edit_bloodgroup"
                                        class="form-control " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly value="<?php echo $row['email'];?>" name="edit_email"
                                        class="form-control " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Specialization</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly value="<?php echo $row['specialization'];?>"
                                        name="edit_specialization" class="form-control " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="submit" name="update" class="btn btn-primary  " value="UPDATE"
                                        required>

                                    <a href="doctoreditprofile.php" class="btn btn-danger">CANCEL</a>

                                </div>
                            </div>
                    </div>
                    </form>

            </div>
            <?php    
            }
          }
          ?>

            <?php

include "footer.php";

?>