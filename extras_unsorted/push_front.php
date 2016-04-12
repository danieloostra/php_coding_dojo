<?php
function push_front($number_array, $pushed_value) {
	$counter = count($number_array);
	echo '<p>Counter:'.$counter.'</p>';
	$counter++;
	echo '<p>Counter++:'.$counter.'</p>';

	for ($i = $counter-1; $i > 0; $i--) 
		{ 
		echo '<p>Counter in loop:'.$i.'</p>';
		$number_array[$i] = $number_array[$i - 1];
		echo '<p>After assignment number_array index:'.$i.'Value:'.$number_array[$i].'</p>';
		}
	$number_array[0] = $pushed_value;
	var_dump($number_array);
}

$numbers = array(1,2,3,4,5);
$x = 6;

push_front($numbers, $x);
?>