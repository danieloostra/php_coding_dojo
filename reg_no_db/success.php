<?php 
session_start();

$errors = array();

if (isset($_POST['email']) && $_POST['email'] != null) {
	if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errors[] ="This is not a valid Email, you douche.";	
	}
} else {
	$errors[] = "Email should not be empty";

} 

//This will ensure us that the string should contain a lower case character 
//as well as an upper case containing a number.The '+' says that there should 
//be ONE OR MORE character from the type of [A-Z]. As you 
//know, [A-Z] is any character from A to Z and so on...

if (! preg_match('/[A-Z]+[a-z]+[0-9]+/', $_POST['password'])) {
		$errors[] = "Your password should have an upper and lower case value and a number!";
} 

if ($_POST['conf_pass'] != $_POST['password']) {
		$errors[] = "Your passwords don't match!";
} 

if (! ctype_alpha($_POST['first_name'] || ! ctype_alpha('last_name'))) {
		$errors[] = "Your first and last name cannot contain any numbers!";
}

$test_arr  = explode('/', $_POST['birthday']);
if (! checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {
		$errors[] = "Please enter your date in MM/DD/YYYY format!";
}

if (! empty($errors)) {
	$_SESSION['errors'] = $errors;	
	echo $_SESSION['errors'];
} else{
echo "Thanks for submitting your information.";
}
?>