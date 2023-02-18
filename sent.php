<!DOCTYPE html>
<html>
<head>
<title>Dziękujemy za zainteresowanie naszą ofertą</title>
<meta charset="UTF-8">
<meta name="keywords" content="pożyczka online, pożyczka pozabankowa, kredyt gotówkowy">
<meta name="description" content="Aby zweryfikować swoją zdolność kredytową nie musisz ruszać się z domu – decyzję dostaniesz przez telefon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top w3-mobile w3-2019-galaxy-blue">
<div class="w3-row-padding w3-content w3-large w3-2019-galaxy-blue">
    <div class="w3-half">
      <a href="tel:517-883-402" class="w3-button w3-block w3-hover-blue-gray">517-883-402</a>
    </div>
    <div class="w3-half">
      <a href="mailto:marcin-dzienio@hotmail.com" class="w3-button w3-block w3-hover-blue-gray">marcin-dzienio@hotmail.com</a>
    </div>
  </div>
  <div id="pasek" class="w3-bar w3-large w3-2019-bluestone">
      <a href="index.php" class="w3-bar-item"><img src="img/klik-pozyczka-50.png" alt="Strona główna"></a>
      <a href="oferta.php" class="w3-bar-item"><img src="img/oferta-50.png" alt="Nasza oferta"></a>
      <a href="formPage.php" class="w3-bar-item w3-display-bottomright"><img src="img/kontakt-50.png" alt="Zostaw kontakt"></a>
  </div>
  <div id="pasek-mobile" class="w3-bar w3-2019-bluestone">
      <a href="index.php" class="w3-bar-item"><img src="img/klik-pozyczka-30.png" alt="Strona główna"></a>
      <a href="oferta.php" class="w3-bar-item"><img src="img/oferta-30.png" alt="Nasza oferta"></a>
      <a href="formPage.php" class="w3-bar-item"><img src="img/kontakt-30.png" alt="Zostaw kontakt"></a>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:120px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Dziękujemy za zainteresowanie!</b></h1>
    <p>Decyzję kredytową dostaniesz przez telefon</p>
  </div>
</div>

<footer class="w3-bottom w3-container w3-2019-galaxy-blue w3-center">
  <p class="info">Created by: <a href="https://github.com/rdzienio" title="gienius" target="_blank" class="w3-hover-text-green">gienius</a> / Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>


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
