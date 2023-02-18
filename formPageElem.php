<?php
echo '  <div class="w3-center w3-padding-64" id="contact">
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
</form>';

?>