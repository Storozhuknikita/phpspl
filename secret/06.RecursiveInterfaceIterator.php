<?php
$arr = [
    ["sitepoint", "phpmaster"],
    ["buildmobile", "rubysource"],
    ["designfestival", "cloudspring",["sitepoint2", "phpmaster",4,
        [
        ["sitepoint", "phpmaster"],
        ["buildmobile", "rubysource"],
        ["designfestival", "cloudspring",["sitepoint2", "phpmaster",4]],
        "not an array"
    ]]],
    "not an array"
];

$iter = new RecursiveArrayIterator($arr);

// Цикл по объекту
// Нужно создать экземпляр RecursiveIteratorIterator

foreach(new RecursiveIteratorIterator($iter) as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}
