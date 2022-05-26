<?php

/* ЗАДАНИЕ №1 */

$dir = new DirectoryIterator($_SERVER['DOCUMENT_ROOT']);

foreach ($dir as $item) {
    if ($item->isDot()) continue;
    echo $item->getFilename() . "<br>";
}

/* ЗАДАНИЕ №2 */

// 1. Поиск элемента массива с известным индексом – O(1)
// 2. Дублирование массива через foreach – O(n)
// 3. Рекурсивная функция нахождения факториала числа – O(n)

/* ЗАДАНИЕ №3 */

// 1. 700 итераций, сложность O(n * log(n));
// 2. 2550 итераций, сложность O(n^2);
