<?php
session_start();
// You goal is to fix this!
var_dump($_POST);

echo "***ALL";
var_dump($_POST['user_id']);

echo "***";
var_dump($_SESSION['users'][$_POST['user_id']]);
?>
