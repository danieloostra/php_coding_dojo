<?php

function print_avg($array)
{
	$num_values = count($array);
	$total=0;
	foreach ($array as $value) 
		{
		$total += $value;
		}
		$avg = $total/$num_values;
		return $avg;
}
$numbers = array(34,5,777,33,4,5);

echo print_avg($numbers);

?>
