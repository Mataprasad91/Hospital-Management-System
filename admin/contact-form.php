<?php
    $title = "CONTACT US";
    include "../public/includes2/header.php";
    include "../public/includes2/navbar.php";



?>


<div class="container" Style="margin-top: 4px;">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>WLCOME CONTACT FORM</p>
  </div>
  <?php
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
  $_SERVER['REQUEST_URI'];
$url = substr($currentURL, strrpos($currentURL, '?') + 1);
if ($url == "msg=submittedsuccesfully") {
  echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close close" data-dismiss="alert"></button>
            <strong>FORM SUBMITTED</strong>THANKYOU.
          </div>';
}
?>
  <div class="row">
  <link rel="stylesheet" type="text/css" href="stylecontact.css">
    </head>
    <div class="column">
      <img src="login-bg.jpg" style="width: 105%" height="100%">
    </div>
    <div class="column">
      <form action="source/viewcontactus_source.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" name="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" name="lastname" placeholder="Your last name.." required>
        <label for="country">City</label>
        <input type="text" name="city"  placeholder="Your city name.." required>
        <label for="contact">Conatct</label>
        <input type="text" name="contact" name="firstname" placeholder="Your contact.." required>
        <label for="Email">Email</label>
        <input type="text" name="email" name="firstname" placeholder="Your Email.." required>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<footer>


            <div class="row cpline">
                <p>copyright &copy; 2020 by Mataprasad. All rights reserved.
                </p>
            </div>

    </footer>
<?php
include "../public/includes2/footer.php"

?>
