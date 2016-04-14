<?php  
session_start();
require_once('connection.php');
require_once('functions.php');


 
if(isset($_SESSION['logged'])){
	$logged_in = '<a href="./clear.php">log off</a>';
	$user_name = $_SESSION['first_name'];

} else {
	$logged_in = '<a href="./login.php">log on</a>';
	$user_name = 'Guest';
    if (headers_sent()) {
	    die('Redirect failed. Please click on this link: <a href="index.php">GO BACK</a>');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Wall</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
<div id='border'>
	<ul id ='top_menu'> 
	<li id = 'top_menu_left'>CodingDojo Wall</li>
	<li id = 'top_menu_right'>Welcome <?=$user_name ?></li>
	<li id = 'top_menu_right'><?=$logged_in ?></li>
	</ul>
</div>

<div class ='container'>
	<div class ='user_post'>
		<form id='form_box' action='process.php' method='post'>
		  <textarea id='text_box' name='message'>Enter your message...</textarea>
		  <input type='hidden' name=' <?php $_SESSION['id']; ?> ' />
 		  <input type='hidden' name='behavior' value='post_message' />
 		  <input type='hidden' name='users_id'></input>
		  <input id='post_button' type='submit' value='Post A Message' />
		</form>
		<form action='process.php' method='post'>
 		  <input type='hidden' name='behavior' value='display_messages' />
		  <input id='post_button' type='submit' value='Display Messages' />
		</form>
	</div>
		<div class ='activity'>
			<div id ='act_title'>
				<div id='user'><?php $_SESSION['first_name'].' '.$_SESSION['last_name'] ?> </div>
				<div id='message_date'><?= $_SESSION['date_time'] ?> </div>
			</div>
			<div id ='act_message'>
				<?php display_msg(); ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>