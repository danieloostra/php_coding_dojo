<?php
session_start();

// var_dump($_SESSION['gold']);

if( ! isset( $_SESSION['activities'] ))
	{
		$_SESSION['activities'] = array();
	}

// $local_gold = $_SESSION['total_gold'];
$gold = 0;
$str = "";

switch ($_POST['building']) 
	{
	case 'farm':
		$gold = rand(10,20);
		$str = '<p style="color:green;">You went to the '.$_POST['building'].' and gained '.$gold. 'gold!</p>';
		break;

	case 'cave':
		$gold = rand(50,100);
		$str = '<p style="color:green;">You went to the '.$_POST['building'].' and gained '.$gold. 'gold!</p>';
		break;

	case 'house':
		$gold = rand(20,50);
		$str = '<p style="color:green;">You went to the '.$_POST['building'].' and gained '.$gold. 'gold!</p>';
		break;

	case 'college':
		$gold = rand(10000,50000);
		$chance = rand(1,10);
			if ($chance <= 7) {
				$str = '<p style="color:red;">You went to '.$_POST['building'].' and lost '.$gold. 'gold!</p>';
				$gold *= -1;
			} else {
				$str = '<p style="color:green;">You went to '.$_POST['building'].' and earned '.$gold. 'gold!</p>';
				$gold *= 1;
			}
			break;
	}
//append the date and time
$str .= " " . date('F j, Y @ g:i a') . "</p>";

array_push($_SESSION['activities'], $str);
$_SESSION['total_gold'] = $_SESSION['total_gold'] + $gold;
header('Location:index.php');
?>