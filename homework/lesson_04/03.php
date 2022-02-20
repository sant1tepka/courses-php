<?php

function number ($a) {
	$x = 0;
//	if ($a < 2) {
//	return "А число то не простое!";
//	} 
	for ($i = 1; $i <= $a; $i++) {
		if ($a % $i == 0) {
			$x++;
		}
		if ($i < $a and $x == 2 or $a == 1) {
			return "А число то не простое!";
			break;
		}
		if ($x == 2 and $i == $a) {
			return "Чисто простое. Даже слишком!";
			break;
		}

	}
}

echo(number(1)); 
