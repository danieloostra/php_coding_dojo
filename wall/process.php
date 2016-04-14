<?php
	session_start();
	include_once('connection.php') ;
	include_once('functions.php'); 

	switch ($_POST['behavior']) {
		case 'user_logout':
			user_logout();
			break;
		case 'user_login':
			user_login();
			display_msg(); 
			break;
		case 'post_message':
			insert_msg();
			display_msg();
			break;
		case 'post_comment':
			insert_comment();
			display_msg();
			break;
		case 'new_user':
			insert_user();
			break;
		case 'display_messages':
			display_msg();
			break;
	}
	if (headers_sent()) {
	    die('Redirect failed. Please click on this link: <a href="index.php">GO BACK</a>');
	}
	else{
	    exit(header('Location: index.php'));
	}
?>


