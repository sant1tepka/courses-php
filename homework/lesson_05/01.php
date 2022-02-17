<?php


function symbols(string $a, string $b) {
	
	return str_replace($b, strtoupper("$b") ,$a);
}

echo(symbols("Hello, World", "l"));

