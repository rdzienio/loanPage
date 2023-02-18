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
    <h1 id="top"><b>Nasza oferta pożyczkowa</b></h1>
    <p>Odzyskaj spokój i przestań się martwić o domowy budżet!</p>
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


  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Nasza oferta</span>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="img/money.jpg" alt="Pożyczka gotówkowa" style="width:100%">
        <div class="w3-container">
          <h3>Pożyczka gotówkowa</h3>
          <p class="w3-opacity">wygoda i pewność</p>
          <p>Pożyczka gotówkowa bez tajemnic. Przekonaj się kiedy jest dobrym rozwiązaniem finansowym i jak korzystać z niej bezpiecznie. Sprawdż jej wady i zalety.</p>
          <p><a href="pozyczka-gotowkowa.php"><button class="w3-button w3-2019-bluestone w3-block">Sprawdź</button></a></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="img/money-calc.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Pożyczka pozabankowa</h3>
          <p class="w3-opacity">bez zbędnych formalności</p>
          <p>Istnieje skuteczna alternatywa dla kredytu bankowego. Przekonaj się czym jest pożyczka pozabankowa i kto może z niej skorzystać. Odwiedź nasze kompendium wiedzy.</p>
          <p><a href="pozyczka-pozabankowa.php"><button class="w3-button w3-2019-bluestone w3-block">Sprawdź</button></a></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="img/money-lady.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Kredyt online</h3>
          <p class="w3-opacity">szybka decyzja</p>
          <p>Pożyczka online to doskonałe rozwiązanie dla osób preferujących załatwianie wszelkich spraw wygodnie, za pośrednictwem komputera i bez wychodzenia z domu.</p>
          <p><a href="pozyczka-online.php"><button class="w3-button w3-2019-bluestone w3-block">Sprawdź</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Formularz kontaktowy</span>
    <div class="w3-panel">
    <p>Zostaw kontakt do siebie, a oddzwonimy!</p>
  </div>
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

<!-- Footer -->

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
