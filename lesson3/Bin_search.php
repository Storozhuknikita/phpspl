<?php

function binarySearch (array $ourArray, int $x) {

	$left = 0;
	$right = count($ourArray)-1;

	while ($left <= $right) {

		$middle = floor(($left+$right)/2);

		if ($ourArray["$middle"] == $x) {
			return $middle;
		}

		elseif ($ourArray["$middle"] > $x) {
			$right = $middle-1;
		}

		elseif ($ourArray["$middle"] < $x) {

			$left = $middle+1;
		}

	}
	return 'Элемент не найден';
}

echo binarySearch_rec([0,1,2,3,4,5,6,7,8,9], 7, 0, 10);


function binarySearch_rec (array $ourArray, int $x, int $left, int $right) {

	if ($left > $right) {
		return 'Элемент не найден';
	}

		$middle = floor(($left+$right)/2);

		if ($ourArray["$middle"] == $x) {
			return $middle;
		}

		elseif ($ourArray["$middle"] > $x) {
			return binarySearch_rec($ourArray, $x, $left, $middle-1);
		}

		elseif ($ourArray["$middle"] < $x) {

			return binarySearch_rec($ourArray, $x, $middle+1, $right);
		}



}