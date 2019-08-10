<?php

function quickSort($mas)
{
	$count = count($mas);
	if ($count <= 1) {
		return $mas;
	}

	$baseEl = $mas[0];
//	$baseEl = $mas[($count-1) - rand(0, $count - 1)];

	$left = [];
	$right = [];

	for ($i = 1; $i < $count; $i++) {
//		if ($mas[$i] == $baseEl) {
//			continue;
//		}
		if ($mas[$i] <= $baseEl) {
			$left[]	= $mas[$i];
		}
		else {
			$right[]	= $mas[$i];
		}
	}
	$left = quickSort($left);
	$right = quickSort($right);
	return array_merge($left, [$baseEl], $right);

}
$arr  =[5, 4, 3, 1, 8, 0, 4, 3, 7, 3];
for ($i= 0; $i < 1000000; $i++){
	$arr[] = $i;
}

$startTime = microtime(true);
//quickSort($arr);

sort($arr);
echo microtime(true) - $startTime;


