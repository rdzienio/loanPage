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
<link rel="stylesheet" href="styles.css">
<!--style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style-->
</head>
<body>



<!-- Links (sit on top) -->
<div class="w3-top w3-mobile">
<div class="w3-cell-row w3-large w3-grey">
    <div class="w3-cell w3-mobile">
      <a href="tel:517-883-402" class="w3-button w3-block w3-mobile">517-883-402</a>
    </div>
    <div class="w3-cell w3-mobile">
      <a href="mailto:marcin.dzienio@proficredit.com.pl" class="w3-button w3-block w3-mobile">marcin.dzienio@proficredit.com.pl</a>
    </div>
  </div>
  <div class="w3-bar w3-large w3-light-grey">
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <div class="w3-dropdown-hover">
       <a href="oferta.php"><button class="w3-button">Oferta</button></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="pozyczka-pozabankowa.php" class="w3-bar-item w3-button">Pożyczki pozabankowe</a>
          <a href="pozyczka-bez-bik.php" class="w3-bar-item w3-button">Pożyczki bez BIK</a>
          <a href="pozyczka-online.php" class="w3-bar-item w3-button">Pożyczki online</a>
        </div>
      </div>
      <a href="formPage.php" class="w3-bar-item w3-button">Kontakt</a>
  </div>
</div>

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

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <!-- <h4>Footer</h4> -->
  <a href="#top" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Do góry</a>
  <p class="info"> Created by: <a href="https://github.com/rdzienio">gienius</a></p>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
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
