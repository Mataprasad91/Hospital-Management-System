<?php
  include ("header.php");
  include "../../db/dbconfig.php";
?>
<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Patients List</h3>
    </ol>
  </div>
</div>
        <div class="row">
          <div class="col-lg-12">
            
            </ol>
          </div>
        </div>
        
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               VIEW Patients
              </header>
              <?php

              $sql="SELECT * FROM register_patient";
              $query=mysqli_query($conn,$sql);
             ?>

              <table class="table table-striped table-advance table-hover">

                <head>
                  <tr>
                    <th>Patient ID </th>
                    <th>FIRST_NAME</th>
                    <th>LAST_NAME</th>
                    <th>ADDRESS</th>
                    <th>DOB</th>
                    <th>BLOOD GROUP</th>
                    <th>PHONE NUMBER</th>
                    <th>EMAIL</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query)>0)
                {
                     while($row=mysqli_fetch_assoc($query))
                      {  
               ?>    
                <tr>
                    <td> <?php echo $row['patientId']; ?></td>
                    <td> <?php echo $row['firstname']; ?></td>
                    <td> <?php echo $row['lastname']; ?></td>
                    <td> <?php echo $row['Address']; ?></td>
                    <td> <?php echo $row['DOB']; ?></td>
                    <td> <?php echo $row['bloodgroup']; ?></td>
                    <td> <?php echo $row['phoneNumber']; ?></td>
                    <td> <?php echo $row['email']; ?></td>

                  </tr>
                  <?php
                     }

                }else{
                    echo"record is not view";
                }
                
                 ?>
               </tbody>
              </table>
            </section>
          </div>

 
<?php
  include ("footer.php");
?>