<!DOCTYPE html>
<html>
<head>
<title>Szybka decyzja kredytowa przez telefon</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<meta name="keywords" content="pożyczka online, pożyczka pozabankowa, kredyt gotówkowy">
<meta name="description" content="Szybka pożyczka pozabankowa to minimum formalności. Zostaw nam kontakt a decyzję dostaniesz nawet przez telefon">
</head>
<body>
<div class="topnav">
  <a href="index.php">Strona główna</a>
  <a href="pozyczka-pozabankowa.php">Pożyczka pozabankowa</a>
  <a class="rightnav" href="mailto:przyklad@demo.pl">email: przyklad@demo.pl</a>
  <a class="rightnav" href="formPage.php">zadzwoń: 517-883-411</a>
  <a class="rightnav" href="formPage.php">formularz kontaktowy</a>
</div>
<div class="header">
    <h1>Szybka pożyczka online</h1>
</div>



<div class="row">
  <div class="formcolumn">
    <div class="card">
    <form class="pure-form pure-form-aligned" method="post" action="send-email.php">
        <fieldset>
            <legend>Zostaw kontakt do siebie, a oddzwonimy!</legend>
            <div class="pure-control-group">
                <label for="name">Imię i nazwisko</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="pure-control-group">
                <label for="phone">Telefon</label>
                <input type="tel" id="phone" name="phone" placeholder="999999999" pattern="[0-9]{9}" required>
            </div>
                <label for="regulamin" class="pure-checkbox">
                    <input type="checkbox" id="regulamin" required/> Tak, zapoznałem się z regulaminem
                </label>
                <button class="pure-button pure-button-primary" type="submit">Zapisz</button>
        </fieldset>
    </form>
      </div>
  </div>
</div>

<div class="footer">
    <h2>Zostaw kontakt do siebie <a href="formPage.php">tutaj</a></h2>
</div>



</body>
</html>