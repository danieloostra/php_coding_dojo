
<?php
//Clear the session array. End the session. Return the user to the home page.
		session_start();
		$_SESSION = array();
		session_destroy();
		echo '<div style="border-style:double; padding: 4px; border-width:2px; margin-left=auto; margin-right:auto; display:block; width:50%; position:relative; left:10px; text-align:center;"><a href="./index.php">Go Back</a> <=|=> <a href="./clear.php">Reset Inputs</a></div>';
?>