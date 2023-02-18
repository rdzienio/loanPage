<!DOCTYPE html>
<html>
<head>
<title>Nasza oferta kredytowa</title>
<meta charset="UTF-8">
<meta name="keywords" content="pożyczka online, pożyczka pozabankowa, kredyt gotówkowy">
<meta name="description" content="Nie musisz obawiać się wzięcia pożyczki przez Internet, ponieważ działamy na Rynku od 18 lat. Pożyczki pozabankowe mogą pomóc w nagłych sytuacjach – pieniądze są u nas dostępne maksymalnie szybko.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Links (sit on top) -->
<?php
require 'menu.php';
?>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:120px;margin-bottom:80px">

  <div class="w3-panel">
    <h1 id="top"><b>Nasza oferta pożyczkowa</b></h1>
    <p>Odzyskaj spokój i przestań się martwić o domowy budżet!</p>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="img/agreement.jpeg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom"><a href="pozyczka-bez-bik.php">Szybka decyzja kredytowa</a></span>
      </div>
    </div>
    </div>


  <!-- Grid -->
  <?php require 'offer-row.php'; ?>

  <!-- Contact -->
  <?php
  require 'formPageElem.php';
  ?>

</div>

<!-- Footer -->

<?php
require 'footer.php';
?>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
