<!DOCTYPE html>
<html>
<head>
<title>Szybka decyzja kredytowa</title>
<meta charset="UTF-8">
<meta name="keywords" content="pożyczka online, pożyczka pozabankowa, kredyt gotówkowy">
<meta name="description" content="Szybka pożyczka pozabankowa to minimum formalności. Zostaw nam kontakt a decyzję dostaniesz nawet przez telefon">
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
    <h1><b>Formularz kontaktowy</b></h1>
    <p>Zostaw kontakt do siebie, a oddzwonimy!</p>
  </div>


  <form class="w3-container" action="send-email.php" method="post">
    <div class="w3-section">
      <label>Imię i nazwisko</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Telefon</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Phone" required>
    </div>
    <div class="w3-section">
      <label>Treść</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Wyślij</button>
    <p class="info">Uwaga! Warunkiem udzielenia pożyczki jest pozytywny wynik oceny zdolności kredytowej klienta. Klikając „Wyślij” wyrażam zgodę na skontaktowanie się ze mną przez pracownika PROFI CREDIT Polska S.A. w celu przedstawienia oferty pożyczkowej.<br>
    Wyrażam zgodę na używanie przez PROFI CREDIT Polska S.A. telekomunikacyjnych urządzeń końcowych (w tym telefonu) i automatycznych systemów wywołujących dla celów marketingu bezpośredniego dostosowanego do moich potrzeb i oczekiwań. <a href="rodo.php">Zasady Ochrony Danych Osobowych</a></p>
  </form>

</div>

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
