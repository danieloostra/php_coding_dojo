<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>


<body>
<form action="new.php">
Your name: <input type="text" name="f_name">
Email: <input type="text" name="l_name">
Purchasing: 
<select name="purchase">
	<option value="t-shirt">T-shirt</option>
	<option value="long_shirt">Long shirt</option>
</select>

<input type="submit">
<br/><br/>Session id:  <?php echo session_id(); ?>
</form>
</body>
</html>
