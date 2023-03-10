<!DOCTYPE html>
<html>
<head>
<title>Szybka pożyczka online</title>
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
<div id="banner" class="w3-container">
  <div class="w3-container w3-display-middle" style="margin-top:120px">
    <div class="w3-display-container mySlides">
      <a href="formPage.php"><img src="img/baner-desktop.jpg" style="width:100%"></a>
        <div class="w3-display-bottomright w3-container w3-padding-32">
          <span class="w3-white w3-padding-large w3-animate-bottom"><a href="formPage.php">Szybka decyzja kredytowa</a></span>
        </div>
    </div>

    <div class="w3-card-4">
      <div class="w3-content">
        <ul class="w3-ul w3-border">
          <li class="w3-2019-bluestone"><h2>Dlaczego my?</h2></li>
          <li><b>Jesteśmy szybcy</b> – pomagamy przede wszystkim w nagłych sytuacjach</li>
          <li><b>Ograniczamy formalności</b> – będziemy potrzebować tylko niezbędnych dokumentów</li>
          <li><b>Szanujemy Twój czas</b> – wstępną decyzję kredytową dostaniesz przez telefon</li>
          <li><b>Chronimy Twój budżet</b> – wysokość raty dopasujemy do Twoich możliwości płatniczych</li>
          <li><b>Doceniamy lojalność</b> – kolejną pożyczkę będziesz mógł dostać na lepszych warunkach</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div id="banner-mobile" class="w3-container" style="margin-top:150px;margin-bottom:40px">
  <div class="w3-panel">
      <a href="formPage.php"><img src="img/baner-mobile.jpg" style="width:100%"></a>
  </div>
  <div class="w3-card-4">
      <div class="w3-content">
        <ul class="w3-ul w3-border">
          <li class="w3-2019-bluestone"><h2>Dlaczego my?</h2></li>
          <li><b>Jesteśmy szybcy</b> – pomagamy przede wszystkim w nagłych sytuacjach</li>
          <li><b>Ograniczamy formalności</b> – będziemy potrzebować tylko niezbędnych dokumentów</li>
          <li><b>Szanujemy Twój czas</b> – wstępną decyzję kredytową dostaniesz przez telefon</li>
          <li><b>Chronimy Twój budżet</b> – wysokość raty dopasujemy do Twoich możliwości płatniczych</li>
          <li><b>Doceniamy lojalność</b> – kolejną pożyczkę będziesz mógł dostać na lepszych warunkach</li>
        </ul>
      </div>
    </div>
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
