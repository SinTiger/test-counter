<?php

function countNumbers(array $array): int
{
    $count = 0;
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] === $array[$i - 1]) {
            $count++;
        }
    }
    return $count;
}

// Генерируем массив, выводим его
$array = [];
for ($i = 1; $i <= 100; $i++) {
    $array[] = rand(1, 20);
}
echo "Массив: " . implode(', ', $array) . "<br>";

// Выводим итог
echo "Количество последовательных пар одинаковых элементов: " . countNumbers($array);
