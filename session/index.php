<?php
session_start();
if(! isset($_SESSION['counter']))
{
	$_SESSION['counter'] = 1;
}
else
{
	$_SESSION['counter'] = $_SESSION['counter'] + 1;
}

//var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter Demo</title>
	<style type="text/css"> 
	h1, h2{
		text-align: center;

	}
	</style>
</head>
<body>

	<h1>You came to this website</h1>
	<h2><?= $_SESSION['counter'] ?> times</h2>

</body>
</html>