<?php

/*
 * Данный пример демонстрирует разницу между
 * индексированными массивами, и ассоциативными.
 */

// Индексированный массив
//
// Индексы (ключи) индексированного массива назначаются автоматически.
// Индексы начинаются с «0», увеличиваются на «1» с каждый новым элементом.
$indexedArray = [
    100,        // 0
    'Hello',    // 1
    []          // 2
];

var_dump($indexedArray);

// Ассоциативный массив
//
// Ключи назначаются «вручную» и могут быть как числами, так и строками.
$assocArray = [
    'name'      => 'John Doe',
    'age'       => 18,
    'telephone' => '+38 (000) 11-22-333',
];

var_dump($assocArray);
