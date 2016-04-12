<?php 
session_start();

if(! isset($_SESSION['total_gold']))
{ $_SESSION['total_gold'] = 0;  
}

if(! isset($_SESSION['activities']))
{ $_SESSION['activities'] = array(); 
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
	<div id="selection">
	<h3>Your Gold <?=$_SESSION['total_gold'] ?></h3>
		<ul>
			<li>
			<p>Farm</p>
			<p>10-20 Gold</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="farm" />
				<input type="submit" value="Find Gold!"/>
			</form>
			</li>

			<li>
			<p>Cave</p>
			<p>50-100 Gold</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="cave" />
				<input type="submit" value="Find Gold!"/>
			</form>
			</li>

			<li>
			<p>House</p>
			<p>20-50 Gold</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="house" />
				<input type="submit" value="Find Gold!"/>
			</form>
			</li>

			<li>
			<p>College</p>
			<p>WIN/LOSE:BIG</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="college" />
				<input type="submit" value="Find Gold!"/>
			</form>
			</li>
		</ul>
		</div>
		<h2>Activities</h2>
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