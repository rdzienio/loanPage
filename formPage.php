<!DOCTYPE html>
<html>
<head>
    <title>Formularz kontaktowy</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Wypełnij ten formularz to skontaktujemy się z Tobą!</h1>
    
    <form method="post" action="send-email.php">
        <label for="name">Imię</label>
        <input type="text" name="name" id="name" required>
        
        <label for="phone">Telefon</label>
        <input type="tel" id="phone" name="phone" placeholder="999999999" pattern="[0-9]{9}" required>
        
        <br>
        
        <button>Zapisz</button>
    </form>
    <br>
    <br>
    <p>Powrót do strony <a href="index.php">głównej</a></p>
</body>
</html>