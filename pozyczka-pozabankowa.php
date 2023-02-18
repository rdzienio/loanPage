<!DOCTYPE html>
<html>
<head>
<title>Pożyczka pozabankowa dla każdego</title>
<meta charset="UTF-8">
<meta name="keywords" content="pożyczka online, pożyczka pozabankowa, kredyt gotówkowy">
<meta name="description" content="Istnieje skuteczna alternatywa dla kredytu bankowego. Przekonaj się czym jest pożyczka pozabankowa i kto może z niej skorzystać.">
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
    <h1 id="top"><b>Pożyczka pozabankowa dla każdego</b></h1>
    <p>Jej plusy i minusy. Jak ją otrzymać? Dla kogo jest dostępna?</p>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="img/agreement.jpeg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Szybka decyzja kredytowa</span>
      </div>
    </div>
    </div>

    <article class="w3-container">
    <p>Wiele osób potrzebuje dodatkowej gotówki, mierząc się z chwilowymi problemami finansowymi. Nie wszyscy jednak mogą skorzystać z oferty kredytu bankowego, dlatego powstało mnóstwo pozabankowych instytucji finansowych, które mają zwykle trochę niższe wymagania dotyczące zdolności kredytowej, łatwiejszy do wypełniania wniosek, ograniczone wymagania dokumentacyjne i oferują szybszą wypłatę gotówki.<br>
    Pożyczka pozabankowa zasadniczo wybierana jest przez osoby posiadające niską zdolność kredytową lub złą historię kredytową albo niewielkie dochody.</p>
    <p>Pożyczka pozabankowa jest bardzo często brana pod uwagę jako rozwiązanie wśród osób, którym niespodziewanie i nagle pogorszyła się sytuacja finansowa. Powody tej sytuacji mogą być różne – przykładami mogą być nieprzewidziane wydatki, w postaci remontu pokoju, kuchni czy łazienki, naprawy lub przeglądu samochodu, czy też pilnego zakupu sprzętu AGD jak lodówka czy piecyk gazowy. </p>
    </article>


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
