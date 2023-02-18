<!DOCTYPE html>
<html>
<head>
<title>Pożyczka online - łatwo i wygodnie</title>
<meta charset="UTF-8">
<meta name="keywords" content="pożyczka online, pożyczka pozabankowa, kredyt gotówkowy">
<meta name="description" content="Pożyczka online to doskonałe rozwiązanie dla osób preferujących załatwianie wszelkich spraw wygodnie bez wychodzenia z domu.">
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
    <h1 id="top"><b>Pożyczka online bez wychodzenia z domu</b></h1>
    <p>Szybki sposób na nagłe wydatki</p>
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
    <p>Pożyczka online to idealne rozwiązanie dla ludzi preferujących załatwianie wszelkich spraw wygodnie, za pośrednictwem komputera i bez wychodzenia z domu. Dawniej zaciągniecie jakiegokolwiek zobowiązania wiązało się z koniecznością wizyty w oddziale lub placówce banku. Aktualnie wystarczy dostęp do Internetu przez telefon, tablet, czy komputer. Wszelkie formalności można teraz dopełnić zdalnie, a spora część instytucji finansowych będzie w stanie przelać środki na konto bankowe w zaledwie kilka chwil.</p>
    <p>Korzystanie z oferty online jest doskonałym rozwiązaniem także dla osób, które nie mają możliwości, aby osobiście udać się do oddziału, z uwagi choćby na odległość czy inne ograniczenia natury technicznej. Głównym celem kredytu online jest pełna dostępność dla klientów. Oznacza to, że tego produktu tej mogą skorzystać zarówno osoby pracujące, jak i emeryci.</p>  
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
