<?php
// 1. get the array
// Checking for max.
// 2. Store the first value in a variable
// 3. Check it against all the other values
// 4. If you come across a higher value then make it max.
// 5. If it isn't then goto the next value and check
// 6. Save the max value in the array as $max => 'value'

// Checking for low.
// 7. Store the first value in a variable
// 8. Check it against all the other values
// 9. If you come across a lower value then make it low.
// 10. If it isn't then goto the next value and check
// 11. Save the low value in the array as $min => 'value' 

$numbers = array( 3923408924308,135,2.4,2.67,1.23,332,2,1.02,0.04,0.003,489374,0.000021 ); 

function get_max_and_min($numbers){
	//Initial declaration of the associative array
	$results = array('max'=>0, 'min'=>9999);
	//Check for max
	for ($i=0; $i < count($numbers) ; $i++) { 
		if ($results['max'] < $numbers[$i]) {
			$results['max'] = $numbers[$i];
		}
	}
	//Check for min
	for ($i=0; $i < count($numbers) ; $i++) { 
		if ($results['min'] > $numbers[$i]) {
			$results['min'] = $numbers[$i];
		}
	}
	return $results;
	// echo 'Max: '.$results['max'].' || Min:'.$results['min'];
}

$r = get_max_and_min($numbers);
var_dump($r);
?>