<?php
$A = array(2,4,10,16);
function multiply($A, $F){
	for ($i=0; $i < count($A); $i++) { 
		$total[$i] = $A[$i] * $F;
			}
			return ($total);
}
$B = multiply($A, 8);  
var_dump($B);
?>
