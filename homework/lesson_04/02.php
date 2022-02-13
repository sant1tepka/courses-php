<?php

function days ($day) {
	switch ($day) {
	case 1:
	return "понедельник";
	break;
	case 2:
	return "вторник";
	break;
	case 3:
	return "среда";
	break;
	case 4:
	return "четверг";
	break;
	case 5:
	return "пятница";
	break;
	case 6:
	return "суббота";
	break;
	case 7:
	return "воскресенье";
	break;
	default:
	return "Error";
	break;
	}
}	
echo (days(rand(1,10)));
