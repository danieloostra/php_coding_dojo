<?php
session_start();

var_dump($_SESSION['gold']);

if(!isset($_SESSION['activities'])){
	$_SESSION['activities'] = array();
}


$gold=0;
$str = "";
switch ($_POST['action']) {
	case 'farm':
		$gold = rand(10,20);
				$str = "<p style="color:green";>You went to the ".$_POST['action']." and gained ".$gold. "gold!</p>";
			break;

	case 'cave':
		$gold = rand(1,1000);
				$str = "<p style="color:green";>You went to the ".$_POST['action']." and gained ".$gold. "gold!</p>";
			break;

	case 'house':
		$gold = rand(1,2);
				$str = "<p style="color:green";>You went to the ".$_POST['action']." and gained ".$gold. "gold!</p>";
			break;

	case 'casino':
		$gold = rand(10000,50000);
		$chance = rand(1,10);
			if ($chance <= 7) {
				$str = '<p style="color:red;">You went to the '.$_POST['action'].'' and lost '.$gold. 'gold!</p>';
				$gold *= -1;
			} else {
				$str = '<p style="color:green;">You went to the '.$_POST['action'].' and won '.$gold. 'gold!</p>';
				$gold *= 1;
			}
			break;
}

$str .= " " . date('F j,Y,g:i a') . "</p>";
array_push($_SESSION['activities'], $str);
$_SESSION['gold'] = $gold;
header('Location: index.php');
?>