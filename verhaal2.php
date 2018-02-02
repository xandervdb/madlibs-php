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
<h2>Onkunde</h2>
<p>Er zijn veel mensen die niet kunnenc <?php echo $_POST["willen"]; ?>. Neem nou <?php echo $_POST["persoon"]; ?>. Zelf met de hulp<br> van een <?php echo $_POST["vakantie"]; ?> of zelfs tien kan <?php echo $_POST["persoon"]; ?> niet <?php echo $_POST["willen"]; ?>. Dat heeft niet te maken met <br> een gebrek aan <?php echo $_POST["slechtste"]; ?>, maar met een teveel aan <?php echo $_POST["beste"]; ?>. te veel <?php echo $_POST["beste"]; ?><br> leidt tot <?php echo $_POST["ergste"]; ?> en dat is niet goed als je wilt <?php echo $_POST["willen"]; ?>. Helaas voor <?php echo $_POST["persoon"]; ?>.</p>
	</article>

</body>
</html>