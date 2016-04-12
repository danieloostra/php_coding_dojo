<?php
session_start();
require_once('connection.php');
require_once('functions.php');

switch (behavior) {
	case 'user_logout':
		user_logout();
		break;
	case 'user_login':
		user_login();
		break;
	case 'post_message':
		insert_msg();
		break;
	case 'post_comment':
		insert_comment();
		break;
	case 'new_user':
		insert_user();
		break;
}
?>


