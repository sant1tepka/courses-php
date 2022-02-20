<?php
require '01.php';

$array = [$marks, $cinema, $films];
function vd($array, $search){
	foreach($array as $key => $value){
		if (gettype($value) == "array") {
			foreach($value as $key => $value){
				if (gettype($value) == "array") {
					foreach($value as $key => $value){
						if (gettype($value) == "array") {
							return("false");	
						}
						else if($value == $search) {
							echo $key;
						}	
					}
				}
				else if($value == $search) {
					echo $key;
				}
			}
		}
		else if($value == $search) {
			echo $key;
		}
		}
	}
echo(vd($array, "Атака клонов"));

