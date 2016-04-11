<?php 
session_start();
	if(! isset($_SESSION['gold']))
	{
		$_SESSION['gold'] = 0;
	}

	if(! isset($_SESSION['activities']))
	{

	$_SESSION['activities'] = array();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ninja GOLD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
	<h3>Your Gold <? $_SESSION['gold'] ?></h3>
		<ul>
			<li>
			<p>Farm</p>
			<p>10-20 Gold</p>
			<form action="process.php" method="post" name="action" value="farm">
			<input type="submit" value="Get Gold" />
			</form>
			</li>

			<li>
			<p>Cave</p>
			<p>5-10 Gold</p>
			<form action="process.php" method="post" name="action" >
			<input type="submit" value="Get Gold" />
			</form>
			</li>

			<li>
			<p>House</p>
			<p>2-5 Gold</p>
			<form action="process.php" method="post" name="action">
			<input type="submit" value="Get Gold" />
			</form>
			</li>

			<li>
			<p>Casino</p>
			<p>Earn/Lose 0-50 Gold</p>
			<form action="process.php" method="post" name="action">
			<input type="submit" value="Get Gold" />
			</form>
			</li>
		</ul>
		<p>Activities</p>
		<div id="activities">
			<?php 
			foreach ($_SESSION['activities'] as $activity) {
				echo $activity;
			}
			?>
		<form action="clear.php" method="post" name="clear">
		<input type="submit" value="Delete Session" />
		</form>
		</div>
	</div>
</body>
</html>