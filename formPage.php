<!DOCTYPE html>
<html>
<head>
<title>Zostaw kontakt | Pożyczki bez BIK</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>
<body>
<div class="topnav">
  <a href="index.php">Strona główna</a>
  <a href="index.php">Aktualności</a>
  <a href="formPage.php" style="float:right; color:rgb(190, 0, 0); background-color: rgba(170, 170, 170, 1); font-weight: bold"> zadzwoń: 517-883-411</a>
</div>
<div class="header">
  <h1>Pożyczki bez BIK</h1>
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
            <div class="pure-control-group">
                <label for="regulamin" class="pure-checkbox">
                    <input type="checkbox" id="regulamin" required/> Tak, zapoznałem się z regulaminem
                </label>
            </div>
            <div class="pure-control-group">
                <button class="pure-button pure-button-primary" type="submit">Zapisz</button>
            </div>
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