<?php

function numbers ($first, $second, $third) {
	if ($first > $second and $first > $third) {
		return "first number $first is biggest";
	} 
	else if ($second > $first and $second > $third) {
		return "second number $second is biggest";
	}
	else if ($third > $second and $third > $first) {
		return "third number $third is biggest";
	}

	else if ($first == $second or $first = $third) {
		return $first;
	}
	else if ($second = $third) {
		return $second;
	}
}	
echo (numbers(rand(), rand(), rand()));
