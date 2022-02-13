<?php

function number ($a) {
	$array = array();
	if ($a == 0) {
	return "Нет уж! Ноль не пойдет";
	} 
	for ($i = 1; $i <= $a; $i++) {			//Нужто то конечно сделать $a -1
		if ($a % $i == 0) {				//Но тогда мы не узнаем само число
			$array[] = $i;
		}
	}
	return ($array);
}

var_dump(number(rand(0,500))); 

