<!-- 

File: states.php - 10 APR 16
Written by: Daniel H. Oostra
email: doostra@codingdojo.com

Coding Dojo Assignment practice: working with US states.
print_states();
print_states_foreach();
print_states_while();
print_states_do_while();
----------------------------
This is an extra working with the associative array.
print_students_foreach(); 

 These functions are to examine how the for loop and the foreach loop are different.  We are passing an array of states to these and would like to see how they print out. Use this to accomplish the states exercise.
 -->


<!DOCTYPE html>
<html>
<head>
	<title>for and foreach exercise</title>

<?php
//The very basic iteration through an array with a for loop. Initialize a counter, count the number of elements in the array, increment the counter by 1 to move through the array
function print_states_for($states_list){

	for ($i=0; $i < count($states_list) ; $i++) { 
	
		echo '<p>VALUE ONLY: '.$states_list[$i].'<strong> In the for Loop, index is: </strong>'.$i.'</p>';

	}
	echo '<hr>';
}
//Pass the array to the foreach loop, "for each" element in the array, set a numeric key and then add the element to that index in the array.

function print_states_foreach($states_list){

	foreach ($states_list as $key => $state) {
		
		echo '<p>KEY: '.$key.' || VALUE: '.$state.' <strong>In a foreach loop</strong> </p>';
	}
	echo '<hr>';
}

//Okay let's try doing the above with a while loop.

function print_states_while($states_list){
	$num = count($states_list);
	$i=0;
	echo '<p><strong>Using just a While - Count Value: </strong>'.$num.'</p>';
	while ($i != $num ) {
		echo $i.'. VALUE ONLY: '.$states_list[$i].'<br/>';
		$i++;
	}
	echo '<hr>';
}

//We might as well also do this with a "do... while" loop.

function print_states_do_while($states_list){
	$num = count($states_list);
	$i=0;
	echo '<p><strong>Using Do-While - Count Value: </strong>'.$num.'</p>';
    do{
    	echo $i.'. VALUE ONLY: '.$states_list[$i].'<br/>';
		$i++;
		} while( $i != $num );
	echo '<hr>';
}


//Some extra credit.

function print_students_foreach($students_list){
	$counter=1;
	foreach ($students_list /*SET AS*/as $long_row) {
		# Now each array that is being stored in the array is being stored in the variable $long_row. Let's grab each item in the $long_row array
		echo '<p>Row:'.$counter.'<br/>';
		foreach ($long_row as $long_row_index => $value_in_each_index) {
			echo '<br/>
				  The index of the long row array: <strong>"'.$long_row_index.'"</strong> The value: '.$value_in_each_index;
		}
		echo '</p><hr><hr>';
		$counter++;
	}
}

function states_drop_down_for($states_list){
	echo '<form action="states.php" method="post"><select>';
	for ($i=0; $i < count($states_list); $i++) { 
			echo '<option value="'.$states_list[$i].'"/>'.$states_list[$i].'</option>';
	}
	echo '</select></form>';
}

function states_drop_down_foreach($states_list){
	echo '<form action="states.php" method="post"><select>';
	foreach ($states_list as $key => $value) {
		echo '<option value="'.$value.'"/>'.$value.'</option>';	
	}
	echo '</select></form>';
}

function states_drop_down_foreach_assoc($states_list){
	echo '<form action="states.php" method="post"><select>';
	foreach ($states_list as $key => $value) {
		echo '<option value="'.$key.'"/>'.$value.'</option>';	
	}
	echo '</select></form>';
}
?>
</head>
<body>

<?php
//declare an array called states and the pass the array to the desired function
$states = array('VA','CA','WA','MA','LA','FL','DE','PA');
$states_assoc = array(	'CA'=>'California',
						'WA'=>'Washington',
						'MA'=>'Massachusetts',
						'LA'=>'Louisiana',
						'FL'=>'Florida',
						'DE'=>'Delaware',
						'PA'=>'Pennsylvania'
						);

// print_states_for( $states );
// print_states_foreach( $states );
// print_states_while( $states );
// print_states_do_while( $states );

states_drop_down_for( $states );
echo '<hr>';
states_drop_down_foreach( $states );
echo '<hr>';
states_drop_down_foreach_assoc( $states_assoc );


?>

<?php 
//Let's do some practice with an associative array, just for grins and giggle :)
// $students = array(
//  				array("first_name" => "Daniel", "last_name" => "Hwan", "age" => 27),
//  				array("first_name" => "Ted", "last_name" => "Davis", "age" =>28),
//  				array("first_name" => "Dan", "last_name" => "Wan", "age" =>27)
//  				);

// print_students_foreach( $students );
?>
</body>
</html>


