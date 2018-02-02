<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Mad libs</h1>

	<article>
		<ul>
 <li><a class="active" href="madlips.php">Er heest paniek...</a></li>
  <li><a href="onkunde.php">Onkunde</a></li>
</ul>
<h2>Er heerst paniek...</h2>
<p>Er heerst paniek in het koningkrijk <?php echo $_POST["land"]; ?>. Koning <?php echo $_POST["docent"]; ?> is ten einde raad en als koning <?php echo $_POST["docent"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"]; ?><br><br>
"<?php echo $_POST["persoon"]; ?>! Het is een ramp! Het is een schande"<br><br>
"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"<br><br>
"Mijn <?php echo $_POST["huisdier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"]; ?> voor hem gekocht! "<br><br>
"Majesteit, uw <?php echo $_POST["huisdier"]; ?> komt vast vanszelf wel weer terug?"<br><br>
"Ja das leuk en aardig maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"];?>"<br><br>
"Maar sire, Daar kunt u toch uw <?php echo $_POST["geld"];?> voor gebruiken?"<br><br>
"<?php echo $_POST["persoon"]; ?> je hebt helemaal gelijk! Wat zou ik moeten als ik jou niet had."<br><br>
"<?php echo $_POST["vervelen"]; ?> Sire"<p>
	</article>

</body>
</html>