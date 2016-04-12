<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Great Number Game - Response Page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<fieldset>
<p id="center_stuff">The number was: <?php echo $_SESSION['rando']; ?></p>
<p id="center_stuff">You Guessed: <?php echo $_SESSION['guess'] ?>
<h1 id="center_stuff"><?php echo $_SESSION['response']; ?></h1>
<form action="index.php" id="center_stuff">
	<input type="submit" value="Go Back" />
</form>
</fieldset>
</body>a
</html>
