<?php
  include ("header.php");
  include "../../db/dbconfig.php";
?>
<section id="main-content">
      <section class="wrapper">
      <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i> CONTACTUS LISTS</h3>
    <?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url == "msg=contactdeleted") {
  echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>CONTACTUS  DELETED</strong>
          </div>';
}
?>
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
               VIEW CONTACTUS
              </header>


              <?php
              $sql="SELECT * FROM viewcontacts";
              $query=mysqli_query($conn,$sql);


             ?>

              <table class="table table-striped table-advance table-hover">

                <head>
                  <tr>
                    <th>FIRST_NAME</th>
                    <th>LAST_NAME</th>
                    <th>CITY</th>
                    <th>CONTACT</th>
                    <th>EMAIL</th>
                    <th>SUBJECT</th>
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
                    <td> <?php echo $row['first_name']; ?></td>
                    <td> <?php echo $row['last_name']; ?></td>
                    <td> <?php echo $row['city']; ?></td>
                    <td> <?php echo $row['contact']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td> <?php echo $row['subject']; ?></td>
                    <td>
                      <form action="../source/delcontact_source.php" method="POST" >
                        <input type="hidden" name="del_id" value="<?Php echo $row['id'] ?>">
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
  include ("footer.php");
?>