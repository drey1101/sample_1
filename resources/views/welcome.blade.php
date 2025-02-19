<!DOCTYPE html>
<html lang="en">
<head>
<title>SAMPLE WEBSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="toggleMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="toggleMenu()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="toggleMenu()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="toggleMenu()">CONTACT</a>
</div>

<!-- Slideshow -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="mySlides w3-display-container w3-center">
    <img src="https://your-vercel-project.vercel.app/w3images/la.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://your-vercel-project.vercel.app/w3images/ny.jpg" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://your-vercel-project.vercel.app/w3images/chicago.jpg" style="width:100%">
  </div>
</div>

<!-- The Band Section -->
<div class="w3-container w3-content w3-center w3-padding-64" id="band">
  <h2 class="w3-wide">THE BAND</h2>
  <p class="w3-opacity"><i>We love music</i></p>
  <div class="w3-row w3-padding-32">
    <div class="w3-third">
      <img src="https://your-vercel-project.vercel.app/w3images/bandmember.jpg" class="w3-round" style="width:60%">
    </div>
    <div class="w3-third">
      <img src="https://your-vercel-project.vercel.app/w3images/bandmember.jpg" class="w3-round" style="width:60%">
    </div>
    <div class="w3-third">
      <img src="https://your-vercel-project.vercel.app/w3images/bandmember.jpg" class="w3-round" style="width:60%">
    </div>
  </div>
</div>

<!-- Tour Locations -->
<div class="w3-black" id="tour">
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
    <h2 class="w3-wide w3-center">TOUR DATES</h2>
    <ul class="w3-ul w3-border w3-white w3-text-grey">
      <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
      <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
      <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
    </ul>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-content w3-padding-64" id="contact">
  <h2 class="w3-wide w3-center">CONTACT</h2>
  <div class="w3-row w3-padding-32">
    <div class="w3-col m6 w3-large">
      <p><i class="fa fa-map-marker"></i> Chicago, US</p>
      <p><i class="fa fa-phone"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope"></i> Email: mail@mail.com</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
</footer>

<script>
// Automatic Slideshow
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(carousel, 4000);
}

// Toggle menu for small screens
function toggleMenu() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
