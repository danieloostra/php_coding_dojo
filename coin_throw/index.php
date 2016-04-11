<!DOCTYPE html>
<html>
<head>
	<title>Coin Toss</title>
	<style type="text/css">
	h3{
		text-decoration: underline;
	}
	</style>
</head>
<body>

<?php
function toss(){
	echo '<h3>Starting the Program</h3>';
	$toss = 0;
	$toss_count=1;
	$head_count=0;
	$tail_count=0;
	do {
		$toss = rand(1,2);
		if ($toss == 1) {
			$head_count++;
			echo "Attempt ".$toss_count.": Throwing a coin... It's a head!";
		}
			else {
				$tail_count++;
				echo "Attempt ".$toss_count.": Throwing a coin... It's a tail!";
			}
				echo '... Got '.$head_count.' head(s) so far and '.$tail_count.' tail(s) so far.<br/>';
				$toss_count++;
		} while($toss_count <= 1000);
	echo '<h3>Ending the Program - Thank You!</h3>';
}
?>
<?php
toss();
?>
</body>
</html>