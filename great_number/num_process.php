<?php
session_start();

if ($_SESSION['rando'] == $_POST['guess'])
	{
		$_SESSION['response'] = "You're RIGHT";
	}

		elseif ($_SESSION['rando'] < $_POST['guess'])
		{
			$_SESSION['response'] = "You're HIGH as a motherf'er";
		}

			else{
				$_SESSION['response'] = "You're LOW, like on the DL";
			}
$_SESSION['guess'] = $_POST['guess'];

header('Location:response.php');

?>