
<?php
  include "header.php";
  
  include "../../db/dbconfig.php";
?>

<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> DELETE PATIENTS</h3>
    <?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url == "msg=doctordelete") {
  echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>PATIENTS RECORD DELETED</strong> 
          </div>';
}

?>
    </ol>
  </div>
</div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               DELETE PATIENTS
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
                <td> <?php echo $row['patientId']; ?></td>
                    <td> <?php echo $row['firstname']; ?></td>
                    <td> <?php echo $row['lastname']; ?></td>
                    <td> <?php echo $row['Address']; ?></td>
                    <td> <?php echo $row['DOB']; ?></td>
                    <td> <?php echo $row['bloodgroup']; ?></td>
                    <td> <?php echo $row['phoneNumber']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td>
                      <form action="../source/del_patients_source.php" method="POST" >
                        <input type="hidden" name="del_id" value="<?Php echo $row['patientId'] ?>">
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
