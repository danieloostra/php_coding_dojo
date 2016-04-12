<?php 
session_start();

if(isset($_SESSION['logged'])){
	$logged_in = 'log off';
	$user_name = $_SESSION['first_name'];
} else {
	$logged_in = 'log on';
	$user_name = 'Guest';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Wall Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="border">
	<ul id ="top_menu"> 
	<li id = "top_menu_left">CodingDojo Wall</li>
	<li id = "top_menu_right">Welcome <?=$user_name ?></li>
	<li id = "top_menu_right"><a href="#"><?=$logged_in ?></a></li>
	</ul>
</div>
<div id='reg_form'>
	<div id='new_form'>
	<p>Returning Users</p>
		<form action='process.php' method='post'>
		<br/><input type='text' name='email' placeholder="Enter your email." />
		<br/><input type='text' name='password' placeholder="Enter your Password." />
		<br/><input type='hidden' name='behavior' value="user_login" />
		<br/><input type='submit' value='ENTER THE WALL' />
		</form>
	</div>
	<div id='new_form'>
	<p>New Users</p>
		<form action='process.php' method='post'>
		<input type='text' name='first_name' placeholder="First Name"/>
		<br/><input type='text' name='last_name' placeholder="Last Name"/>
		<br/><input type='text' name='email' placeholder="Email Address"/>
		<br/><input type='text' name='password' placeholder="Enter a password" />
		<br/><input type='hidden' name='behavior' value="new_user" />
		<br/><input type='submit' value='REGISTER' />
		</form>
	</div>
</div>
</body>
</html>