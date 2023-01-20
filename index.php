<!DOCTYPE html>
<html>
<head>
<title>Pożyczki bez BIK</title>
<link rel="stylesheet" href="styles.css">
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
  <div class="leftcolumn">
    <div class="card">
    <form method="post" action="send-email.php">
        <label for="name">Imię</label><br>
        <input type="text" name="name" id="name" required><br>
        <br>
        <label for="phone">Telefon</label><br>
        <input type="tel" id="phone" name="phone" placeholder="999999999" pattern="[0-9]{9}" required><br>
        
        <br>
        
        <button>Zapisz</button>
    </form>
      </div>
  </div>
</div>

<div class="footer">
    <h2>Zostaw kontakt do siebie --><a href="formPage.php">tutaj</a></h2>
</div>



</body>
</html>