<?php

function fact(int $a)
{
	if ($a == 1) {
		return 1;
}
	return fact(1);
}
$a = fact(44);

echo $a;
