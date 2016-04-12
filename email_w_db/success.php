<?php
include('conn.php');
$errors = array();


function print_all(){
		$query = "SELECT * FROM email_w_db order by created";
		$emails = fetch_all($query);

		foreach ($emails as $row) {
		    echo $row['email'].' '.$row['created'].'<br/>';
		}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SUCCESS!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<?php
	if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo 'This is not a valid Email!';	
		}
		else { 
			$query = "INSERT INTO email_w_db(email,created,updated) VALUES('".$_POST['email']."',NOW(),NOW())";
			run_mysql_query($query);
		}
	 ?>
	 <div id='success'>
	 	The email address that you entered (<?=$_POST['email']?>)<br/>
	 	is a valid email address. Thank you!
	 </div>
	 <div id='success_title'>
		Email Addresses Entered:
	 </div>
	 <div id='email_list'>
	  	<?php print_all(); ?>
	 </div>
	</body>
</html>