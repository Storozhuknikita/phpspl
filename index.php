<?php
include 'lesson.php';

$stackOur = new MyStack(1000000);
$stackSpl = new SplStack();
$arraySpl = new SplFixedArray(100000);
$arrayOur = [];

$start = microtime(true);

for ($i = 0; $i<100000; $i++) {
	$arraySpl[$i] = $i;
}
/*
for ($i = 0; $i < 1000000; $i++)
	$stackOur->push(1);*/

echo microtime(true) - $start;

//Spl = 0.46 \ 0.11
//SPL Array = 0.027 \ 0.003
//OUR array = 0.2 \ 0.027