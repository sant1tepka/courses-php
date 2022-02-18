<?php

function pwd(string $data) {
	if (strlen($data) < 8) {
		echo "Простой";
	}
	else if (ctype_alnum($data) == false){
		echo "Сложный";
	}
	else{
		echo "Нормальный";
	}
}

pwd("a@@zs");
