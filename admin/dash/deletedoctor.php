
<?php
  include "header.php";
  
  include "../../db/dbconfig.php";
?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> DELETE DOCTORS</h3>
    <?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url == "msg=doctordelete") {
  echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>DOCTOR RECORD DELETED</strong> 
          </div>';
}

?>
    </ol>
  </div>
</div>
        <div class="row">
          <div class="col-lg-12">

          
          </div>
        </div>
        
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               DELETE DOCTORS
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
                    <th>DELETE</th>
                    
                    
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
                    <td>
                      <form action="../source/deldoctor_source.php" method="POST" >
                        <input type="hidden" name="del_id" value="<?Php echo $row['d_id'] ?>">
                        <button type="submit" name="del_button" class="btn btn-danger">DELETE</a></button>
                      </form>
                    </td>
                    
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


  include "footer.php";
?>
