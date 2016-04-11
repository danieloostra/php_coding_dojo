<?php
function findprintmax($arr) {
	if ($arr==0) {
		echo "This is an empty array!";
		die();
	}
$max = 0;
for ($i=0; $i < count($arr); $i++) { 
	echo count($arr);
	if ($arr[$i] > $arr[$i++]) {
		$max = $arr[$i];
	}
}
echo "The largest number: $max";
}

$short_array=array(1,2,3,4,5,6,7,8);

findprintmax($short_array);

?>
