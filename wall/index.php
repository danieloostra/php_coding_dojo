<?php
session_start();
require_once('connection.php');
$_SESSION['user_id'] = 7;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Wall Assignment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="border">
	<ul id ="top_menu"> 
	<li id = "top_menu_left">CodingDojo Wall</li>
	<li id = "top_menu_right">Welcome Daniel</li>
	<li id = "top_menu_right"><a href="#">log off</a></li>
	</ul>
</div>

<div class ="container">
	<div class ="user_post">
		<form id="form_box" action="process.php" method="post">
		  <textarea id="text_box" name="message">Enter your message...</textarea>
		  <input type="hidden" name="<?php $_SESSION['user_id'] ?>" />
 		  <input type="hidden" name="behavior" value="create"/>
		  <input id="post_button" type="submit" value="Post A Message" />
		</form>

	</div>
		<div class ="activity">
			<div id ="act_title">
				<div id="user"><?php $query = "select first_name from users where id = 7";
									fetch_record($query);
									?> </div>
				<div id="message_date">
							   <?php $query = "select message from message where id = 11"; 
									fetch_record($query); 
									?></div>
			</div>
			<div id ="act_message">
				User message
			</div>
		</div>
	</div>
</div>
</body>
</html>