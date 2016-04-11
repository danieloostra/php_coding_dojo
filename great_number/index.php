<?php  
session_start();
$_SESSION['rando'] = rand(1,100);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Great Number Game</title>
</head>
<body>
	<h3>Random Number 1-100</h3>
	<h4>Try to guess the number :</h4>
	<form action="num_process.php" method="post">
		<input type="text" name="guess"/>
		<input type="hidden" name="<? $_SESSION['rando']?>" />
		<input type="submit" />
	</form>
</body>
</html>