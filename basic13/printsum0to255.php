<?php
function printsum0to255(){
	$total = 0;
	for ($i=0; $i <= 255 ; $i++) { 
	 $total += $i;
	}
	echo $total;
}
// printsum0to255();
?>