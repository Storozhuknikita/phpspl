<?php

$array = [1, 5, 6, 8, 2, 0, 3, 4, 9, 7];

function findMax($array)
{
    $result = $array[0];                        // O(1)
   
    for ($i = 1; $i < count($array); $i++) {    // O(N)
        if ($array[$i] > $result) {
            $result = $array[$i];
        }
    }
   
    return $result;                             // O(1)
}

echo findMax($array) . PHP_EOL;

/*
Приведенный алгоритм выполняет шаг отладки перед циклом и еще один – после него.
Каждый из них имеет производительность O(1) (однократное действие),
поэтому общее время работы алгоритма составит O(1 + N + 1). Если использовать
обычную алгебру и преобразовать выражение, то получится O(2 + N).
*/