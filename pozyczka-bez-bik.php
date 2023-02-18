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
    <h1 id="top"><b>Pożyczka bez BIK dla każdego</b></h1>
    <p>Czym jest pożyczka bez BIK? Co ją wyróżnia wyróżnia? Czy warto z niej skorzystać? Czy jest droższa niż kredyt? Poznaj odpowiedzi na te i inne pytania.</p>
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
    <p>Wiele razy przeglądając oferty instytucji finansowych w Internecie spotykamy się z okresleniem pożyczka bez BIK. Poniżej przedstawimy cechy, którymi ten produkt się wyróżnia, jakie są jego plusy i minusy, na co szczególnie zwrócić uwagę przy jego wyborze.</p>
    <p>Pożyczkę bez BIK można podzielić na dwa rodzaje: pożyczkę krótkoterminową i długoterminową. Ważnym jest jednak aby w pierwszej kolejności rozróżnić pożyczkę od kredytu. Produkt finansowy, jakim jest kredyt jest udzielany wyłącznie przez banki, natomiast pożyczkę może przyznać instytucja pozabankowa, która nie jest bankiem, ale spełnia warunki stawiane przez Ustawę o Kredycie Konsumenckim.</p>
    <p>Pożyczki krótkoterminowe, udzielane są zazwyczaj na dość krótki okres czasu i najczęściej ich spłata wymagana jest w ciągu 30 do 60 dni. Możemy o niej powiedzieć, że jest to tzw. chwilówka.</p>
    <p>Pożyczka długoterminowa daje zwykle możliwość pozyskania większej kwoty – czasami nawet kilkunastu tysięcy złotych, a okres kredytowania jest rozłożony w czasie na kilkanaście lub kilkadziesiąt miesięcy. Kwota do spłaty dzielona jest na raty, co sprawie, że jest łatwiejsza do udźwignięcia dla budżetu domowego.</p>
    <p>Poza wszystkimi powszechnie znanymi zaletami pożyczek pozabankowych – szybkość, elastyczność, przewidywalne koszty, należy także wspomnieć o maksymalnej dyskrecji. Firmy pożyczkowe dbają o poufność i prywatność swoich klientów. Nikomu niepowołanemu nie udostępniają danych, ani pozostałych informacji finansowych. Pożyczka bez BIK nie jest odnotowywana w rejestrze BIK jeśli jest spłacana regularnie i na czas. Potencjalnie nie musisz się martwić, że ktokolwiek z Twojego otoczenia dowie się, że korzystasz z pożyczek. Pieniądze trafią na Twoje konto bankowe, do którego dostęp masz zapewne tylko Ty.
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
