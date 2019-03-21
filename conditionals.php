<?php
	# conditionals

	/*
		==
		===
		<
		>
		<=
		>=
		!=
		!==
	*/

	/*
		$num = 6;
	
		if($num == 5){
			echo '5 passed';
		} elseif ($num == 6){
			echo'6 passed';
		} else {
			echo'did not pass';
		}
	*/

		#nesting if

		$num = 6;

	/*
		if ($num > 4) {
			if ($num < 10){
				echo "$num passed";
			} else {
				echo""whatever;
			}
		}
	*/

	/*
		logical operators

		and &&
		or ||
		xor
	*/

	/*
		if($num > 4 XOR $num < 10){
			echo "$num passed";
		}
	*/

	#switch

	$favColour = 'red';

	switch ($favColour) {

		case 'red':
			echo "your favorite colour is red";
			break;

		case 'blue':
			echo "your favorite colour is blue";
			break;

		case 'green':
			echo "your favorite colour is green";
			break;

		default:
			echo "your favorite colour is something else";
			break;
	}
?>