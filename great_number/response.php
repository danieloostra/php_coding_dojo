<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>The number was: </p>
<?php
echo $_SESSION['rando'];
?>
<p>You Guessed: <?php 
echo $_SESSION['guess']
?>
<h1>
<?php
echo $_SESSION['response'];
?>
</h1>
<form action="index.php">
	<input type="submit" value="Go Back" />
</form>
</body>
</html>
