<?php
require '01.php';

rsort($films); // сортируем по алфавиту в обратном порядке

shuffle($cinema); // сортируем в случайном порядке

asort($marks); // сортируем по оценкам сохраняя связь с ключами

var_dump ($marks);	
