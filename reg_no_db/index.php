<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Registration Page</title>
</head>
<body>
<fieldset 
style="
display: block;
padding:5px;
width:20em;
border-style: thick;
border-color: black;
text-align: center;
margin-left: auto;
margin-right: auto;
">
<form action="success.php" method="post">
	Email: <input type='text' name='email'></input>
	<br/>First Name: <input type='text' name='first_name'></input>
	<br/>Last Name: <input type='text' name='last_name'></input>
	<br/>Password: <input type='text' name='password'></input>
	<br/>Confirm Password:<input type='text' name='conf_pass'></input>
	<br/>Date of Birth<input type='text' name='birthday'></input>
	<br/><input type='submit' value="submit"></input>
</form>
</fieldset>

</body>
</html>