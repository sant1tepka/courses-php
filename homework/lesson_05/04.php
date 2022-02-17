<?php

function foo(string $a = "#", int $b = 5) {
	for($i = 1; $i <= $b; $i++) {
		echo(str_repeat($a, $i));
		echo("\n");
		}
}

foo("t", 15);

