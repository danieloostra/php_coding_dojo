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
	<title>The Wall</title>
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

<div class ="container">
	<div class ="user_post">
		<form id="form_box" action="process.php" method="post">
		  <textarea id="text_box" name="message">Enter your message...</textarea>
		  <input type="hidden" name="<?php $_SESSION['user_id'] ?>" />
 		  <input type="hidden" name="behavior" value="post_message"/>
		  <input id="post_button" type="submit" value="Post A Message" />
		</form>

	</div>
		<div class ="activity">
			<div id ="act_title">
				<div id="user"><?php $query = "select first_name from users where id = ";
									fetch_record($query);
									?> </div>
				<div id="message_date">
							   <?php $query = "select message from message where id = "; 
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