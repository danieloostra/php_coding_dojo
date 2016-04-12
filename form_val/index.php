<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OMG</title>
	<meta charset="utf-8">
</head>
<body>

<p style="margin:50px;">
<form action="process.php" method="post">
	EMAIL: <input type="text" name="email" />
	<br/>PASSWORD: <input type="text" name="houseword" />
	<br/><input type="submit" value="Submit" />
</form>
<?php
if (isset ($_SESSION['errors'])) {
	foreach ($_SESSION['errors'] as $error) 
	{
	echo $error;
	}
	$_SESSION = array();
}
?>

</p>
</body>
</html>