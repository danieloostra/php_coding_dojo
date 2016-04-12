<?php  
session_start();
$_SESSION['rando'] = rand(1,100);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Great Number Game</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id=wrapper>
	<h3 id="center_stuff">Random Number 1-100</h3>
	<h4 id="center_stuff">Try to guess the number :</h4>
	<form action="num_process.php" method="post" id="center_stuff">
		<input type="text" name="guess"/>
		<input type="hidden" name="<?php $_SESSION['rando']?>" />
		<input type="submit" />
	</form>
	</div>
</body>
</html>