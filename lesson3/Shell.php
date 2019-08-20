<?php
/**
 * @param $elements
 * @return mixed
 *
 * 1. Получить число шагов для заданного алгоритма.
 * 2. Вычислить сложность алгоритма.
 * 3. *Реализовать функционал сортировки слиянием.
 */



function ShellSort($elements) {
	$k=0;
	$length = count($elements);
	$gap[0] = (int) ($length / 2);

	while($gap[$k] > 1) {
		$k++;
		$gap[$k]= (int)($gap[$k-1] / 2); //O(log(n))
	}

	for($i = 0; $i <= $k; $i++){ //O(log(n))
		$step = $gap[$i];

		for($j = $step; $j < $length; $j++) {  //O(n)
			$temp = $elements[$j];
			$p = $j - $step;

			while($p >= 0 && $temp['price'] < $elements[$p]['price']) { //O(log(n))
				$elements[$p + $step] = $elements[$p];
				$p = $p - $step;
			}

			$elements[$p + $step] = $temp;
		}
	}

	return $elements;
}


//O(log(n)) + O(log(n))*O(n)*O(log(n)) = O(n*(log(n))^2)
