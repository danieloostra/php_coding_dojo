<?php  
$A = array(2,3,'hello');

function print_lists($A){
	echo "<ul>";
	for ($i=0; $i < count($A); $i++) 
		{ 
			echo "<li>".$A[$i]."</li>";
		}
	echo "</ul>";
}

print_lists($A);

?>
