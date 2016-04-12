<?php
session_start();

$errors = array();

if (isset($_POST['email']) && $_POST['email'] != null) {
	if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errors[] ="This is not a valid Email, you douche.";	
	}
} else {
	$errors[] = "Email should not be empty";

} if (! empty($errors)) {
	$_SESSION['errors'] = $errors;
	header('Location:index.php');
	
}
echo "You are logged in!";
?>
