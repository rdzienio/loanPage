<!DOCTYPE html>
<html>
<head>
<title>Pożyczka bez BIK</title>
<meta charset="UTF-8">
<meta name="keywords" content="pożyczka online, pożyczka pozabankowa, kredyt gotówkowy">
<meta name="description" content="Czym jest pożyczka bez BIK? Co ją wyróżnia wyróżnia? Czy warto z niej skorzystać? Czy jest droższa niż kredyt?">
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
    <h1 id="top"><b>Pożyczka gotówkowa dla każdego</b></h1>
    <p>Pożyczka gotówkowa bez tajemnic. Przekonaj się kiedy jest dobrym rozwiązaniem finansowym i jak korzystać z niej bezpiecznie. Sprawdż jej wady i zalety.</p>
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
    <p>Kredyt gotówkowy jest jednym z najbardziej popularnych instrumentów finansowych na rynku. Produkt ten jest oferowany przez instytucje finansowe i jest kojarzony ze źródłem finansowania, dedykowanym osobom o dobrej lub przeciętnej zdolności kredytowej.</p>
    <p>Firmy oferujące pożyczki stosują często bardzo liberalne warunki przyznawania finansowania, kosztem maksymalnej kwoty organiczonej najczęściej do poziomu kilkunastu tysięcy złotych. Stosunkowo często oferta firm pozabankowych daje możliwość otrzymania tzw. pożyczki na oświadczenie. W jej przypadku w ramach procesu wnioskowania najprawdopodobniej ograniczy się jedynie do przedstawienia dowodu osobistego lub innego dokumentu, potwierdzającego tożsamość. Uczciwie trzeba jednak przyznać, że szybka gotówka pozyskana na rynku pozabankowym jest zwykle droższa, niż kredyt gotówkowy udzielany przez banki.</p>
    <p>Aby uniknąć nieprzyjemności warto zweryfikować pożyczkodawcę. Ilość ofert pożyczkowych na rynku finansowym jest ogromna. W Internecie często można znaleźć zestawienia nawet kilkudziesięciu firm, udzielających tego rodzaju finansowania. Pożyczając pieniądze koniecznie sprawdź, czy pożyczkodawca widnieje w <a href="https://rpkip.knf.gov.pl/index.html?type=RIP">Rejestrze Pośredników Kredytowych i Instytucji Pożyczkowych</a>, prowadzonym przez Komisję Nadzoru Finansowego. Będzie to dowód na to, że firma działa na polskim rynku legalnie i spełnia podstawowe kryteria prowadzenia tego rodzaju działalności zapisane w ustawie.</p>
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
