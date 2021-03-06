<?php

/*
 * Данный пример демонстрирует объединение массивов с
 * помощью оператора обьединения и специальной функции «array_merge».
 */

$a = [
    'name' => 'John',
    'telephone' => '+66 (000) 1122-333',
];

$b = [
    'name' => 'Doe',
    'email' => 'email@test.net',
];

// Оператор обьединения «+»
// Объеденяет массивы, игнорируя пересечения ключей.
// Если в массивах есть одинаковые ключи, но перезапись значений
// этих ключей не произойдет, значения остануться как в массиве,
// стоящем слева от знака объединения.

//$c = $a + $b;
//$c = $b + $a;

// Более распространенный вариант — перезаписывать значения ключей.
// https://www.php.net/manual/ru/function.array-merge

$c = array_merge($a, $b);

var_dump($c);
