<?php
//This is the Draw Stars solution
//Daniel Oostra
//doostra@codingdojo.com
// Create a function called draw_stars() that takes an array of numbers and echo out  an asterisk, or '*'.
// For example:
// $x = array(4, 6, 1, 3, 5, 7, 25);

function draw_stars($number_array){
	for ($i=0; $i < count($number_array) ; $i++) { 
		for ($j=0; $j<$number_array[$i]; $j++) { 
			echo '*';	
		}
		echo '<br/>'
	}
}


$x = array(4, 6, 1, 3, 5, 7, 25);
draw_stars($x);
?>