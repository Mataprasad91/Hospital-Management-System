<?php
  include ("header.php");
  include "../../db/dbconfig.php";
?>
<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> DOCTOR LISTS</h3>

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
               VIEW DOCTORS
              </header>

              <?php

              $sql="SELECT * FROM add_doctor";
              $query=mysqli_query($conn,$sql);


             ?>

              <table class="table table-striped table-advance table-hover">

                <head>
                  <tr>
                    <th>FIRST_NAME</th>
                    <th>LAST_NAME</th>
                    <th>ADDRESS</th>
                    <th>CONTACT</th>
                    <th>DOB</th>
                    <th>BLOOD GROUP</th>
                    <th>DEPARTMENT</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>


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
                    <td> <?php echo $row['fname']; ?></td>
                    <td> <?php echo $row['lname']; ?></td>
                    <td> <?php echo $row['address']; ?></td>
                    <td> <?php echo $row['contact']; ?></td>
                    <td> <?php echo $row['dob']; ?></td>
                    <td> <?php echo $row['bloodgroup']; ?></td>
                    <td> <?php echo $row['specialization']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td> <?php echo $row['password']; ?></td>

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