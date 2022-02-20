<?php
require '01.php';

$array = [$marks, $cinema, $films];
function vd($array, $search){
	foreach($array as $key => $value){
		if (gettype($value) == "array") {
			vd($value, $search);
		}
		else if($value == $search) {
			echo $key;
		}
		}
	}
vd($array, "50");

