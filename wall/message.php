<?php
session_start();
require_once('connection.php');
$create = function($data){

	$query = "INSERT INTO messages(user_id, message, created_at, updated_at) VALUES ('dannyoo','hi dude', NOW(),NOW())";
    }
	header("Location:results.php");

$action_catcher = [
 'create' => $create,
 'delete' => $delete_user,
 'show' => $show
];

$action_catcher[$_POST['behavior']]($_POST);
};
?>