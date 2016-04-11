<?php
//This is the Draw Stars (and then letters) solution
//Daniel Oostra
//doostra@codingdojo.com
// Create a function called draw_stars() that takes an array of numbers and echo out  an asterisk, or '*'.
// For example:
// $x = array(4, 6, 1, 3, 5, 7, 25);

function draw_stars($number_array){
	for ($i = 0; $i < count( $number_array ) ; $i++) { 
		for ($j = 0; $j < $number_array[$i]; $j++) { 
			echo '*';	
		}
		echo '<br/>';
	}
}

// $x = array(4,6,1,3,5,7,25,2,3,4,5,6,7,8,9,10);
// draw_stars($x);

function draw_stars_letters( $mixed_array ){
	$counter = count( $mixed_array );
	//run through the array, 
	for ($i = 0; $i < $counter ; $i++) { 
		//print each selected letter or number of stars in each.
		if ( is_numeric( $mixed_array[$i] )) {
			for ($j = 0; $j < $mixed_array[$i] ; $j++) { 
				echo '*';
			}}
			//if it's a number let's pull out the is_numeric() function.
		else {
			//the value stored in the array must be a string. let's use a built in function and also use the fact that a string is actually a character array. So, $str[0] will equal the first letter in the string. Just remember that you'd replace $str = $mixed_array[$i] and then put the index of the string array... [n]... We'll also use the strtolower(), to pull make the string lower case.
			for ($k = 0; $k < strlen($mixed_array[$i]) ; $k++) { 
			echo strtolower( $mixed_array[$i][0] );
			}}
		echo '<br/>';
	}//close the outer for loop
}//close the function

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
draw_stars_letters($x);


?>