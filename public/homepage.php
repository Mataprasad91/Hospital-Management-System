<?php
    $title="homepage";
    include "includes2/header.php";
    include "includes2/navbar.php";
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mata.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">

</head>
<body>

    
<section class="slide">   
<div class="slideshow-container">

<div class="mySlides fade">
  <img class="img1" src="img1.jpeg">
  
</div>

<div class="mySlides fade img2">
  <img class="img2" src="img2.jpeg">
 
</div>

<div class="mySlides fade img3">
  <img class="img3" src="img3.jpeg">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    </section>
    <section class="sec2">
        <img class="img4" src="sec2.jpg" />
        <h1>Welcome To ....</h1>
        <br />
        <p class="deta">We’re glad you hand your dental health concerns to our skilled hands. We’ll make sure to deliver the best possible healthcare to all our patients! Of course, we always complement our main services with a customer service oriented approach.

We sincerely believe that visiting a dentist shouldn’t be a frightening or stressful experience! We provide an equally comfortable experience of relaxation for all our young and adult customers! Also we implement a lot of pain management and anesthesia options.Everything we do is aimed at making you feel comfortable, while we take care of your oral healthcare!

It includes both local anesthesia for mouth-numbing as well as a sedative anesthesia. Altogether, this helps relief any pain which might occur in the process of treatment. All in all, we’ve got it all under control at our BeDentist dental health clinic.

We invite you to explore the information about our dental office on our website! Feel free to read our terms and conditions and all the additional info we have posted here.

Once our customer, you will be leaving our dental clinic with a bright, wide smile!</p>
    </section>
    
    <section class="section4" id="price">
         <div class="container1">
           <video  class="video1" controls>
                    <source src="movie.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
            </div>
        </section>
     <footer>
            
           
                <div class="row cpline">
                    <p>copyright &copy; 2020 by Mataprasad. All rights reserved.
                    </p>
                </div>
            
        </footer>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>
</html> 

<?php
include "includes2/footer.php";
?>
