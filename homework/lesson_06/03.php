<?php
require '01.php';

$array = [$marks, $cinema, $films];
function vd($array){
	foreach($array as $key => $value){
		if (gettype($value) == "array") {
			vd($value);
		}
		else {
			echo "$key => $value\n";
		}
	}
}	
vd($array);

