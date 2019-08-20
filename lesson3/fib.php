<?php


function fib ($num) {
	$first = 0;
	$second = 1;

	// 0 1 1 2 3 5 8 13 21 34

	for ($i = 0; $i< $num; $i++) {
		if($i<=1) {
			$next = $i;
					}
		else {
			$next = $first + $second;
			$first = $second;
			$second = $next;
		}
		echo $next." ";
	}
}

function fibonacci($n){
	if ($n == 0) return 0;
	if ($n == 1) return 1;
	return fibonacci($n - 1) + fibonacci($n - 2);
}


echo fib(5000);