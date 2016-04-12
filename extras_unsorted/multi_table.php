<?php
//This is the multiplication table solution
//Daniel Oostra
//doostra@codingdojo.com
// Create a program that displays a multiplication table that looks like the table below. 

// Note: Do not put values into arrays.

// 1	2	3	4	5	6	7	8	9
// 1	1	2	3	4	5	6	7	8	9
// 2	2	4	6	8	10	12	14	16	18
// 3	3	6	9	12	15	18	21	24	27
// 4	4	8	12	16	20	24	28	32	36
// 5	5	10	15	20	25	30	35	40	45
// 6	6	12	18	24	30	36	42	48	54
// 7	7	14	21	28	35	42	49	56	63
// 8	8	16	24	32	40	48	56	64	72
// 9	9	18	27	36	45	54	63	72	81
// Display every other row in different background color, with one row in light grey color, the other row in white color. Make the font size of the first row larger and make it bold. Similarly, style the first column so the font is larger and bold. Spend up to 5-10 minutes to make this look pretty using CSS!
?>
<?php 
function top_row(){
$top_row = 1;
echo '<tr class="first_row"><td></td>';
for ($i=1; $i < 10; $i++) { 
	echo '<td>'.$i.'</td>';
}
echo '</tr>';
} 

function middle_rows(){
	for ($j=1; $j < 10; $j++) {
		if ($j % 2 == 1) {
		echo '<tr class="grey_back"><td class="first_element">'.$j.'</td>';
 			} 
	 		else {
				echo '<tr><td class="first_element">'.$j.'</td>';
				}
		for ($i=1; $i < 10 ; $i++) { 
			echo '<td>'.$i*$j.'</td>';					
			} 
		echo '</tr>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
	<link rel="stylesheet" type="text/css" href="./css/multi_table_style.css">
</head>
	<body>

		<table>
		<?php 
		top_row(); 
		middle_rows();
		?>
		</table>
	</body>
</html>