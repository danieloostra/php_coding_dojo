<?php
$users['f_name'] = "Daniel";
$users['l_name'] = "Oostra";

function key_val($names){
	echo "There are 2 keys in this array
	<br>&emsp;first_name
	<br>&emsp;last_name
	<br>
	The value in the key 'first_name' is $names[f_name]<br>
	The value in the key 'last_name' is $names[l_name]";
}


function grade (){
	$score = rand(50,100);
	switch ($score) {
		case ($score < 70):
			echo "<h1>Your Score: ".$score."/100</h1>";
			echo "<h2>Your grade is D</h2>";
			break;
		case ($score > 70 && $score < 80):
			echo "<h1>Your Score: ".$score."/100</h1>";
			echo "<h2>Your grade is C</h2>";
			break;
		case ($score >= 80 && $score < 90):
			echo "<h1>Your Score: ".$score."/100</h1>";
			echo "<h2>Your grade is B</h2>";
			break;
		case ($score >= 90 && $score < 100):
			echo "<h1>Your Score: ".$score."/100</h1>";
			echo "<h2>Your grade is A</h2>";
			break;	
		};
}

for ($i=1; $i < 101; $i++) { 
echo $i.": ";
grade();
}


?>