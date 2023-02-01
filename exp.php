<?php 
	/*function solution($A){
		$min = min($A);
		$max = max($A);
		if($min < -1000000 || $max > 1000000){
			return "Melebihi Batas";
		}
		if($max < 0){
			return 1;
		}
		if(gettype($A) != "array"){
			return "Parameter harus array";
		}
		sort($A);
		foreach (array_unique($A) as $k) {
			if(gettype($k) != "integer"){
				return "Array harus berisi number";
			}
			if($min != $k){
				return $min;
			}
			$min++;
		}
		return $min;
	}*/
	function solution($A){
		if(count($A) < 1 || count($A) >= 1000){
			return "Jumlah array harus 1 - 1000";
		}
		$min = min($A);
		$max = max($A);
		if($min < -1000000 || $max > 1000000){
			return "Melebihi Batas";
		}
		if(gettype($A) != "array"){
			return "Parameter harus array";
		}
		$total = 0;
		$count = 1;
		foreach ($A as $k) {
			if(gettype($k) != "integer"){
				return "Array harus berisi number";
			}
			if ($count <= 3) {
				if ($k > 0) {
					$total += $k;
					$count++;
				}
					
			}
			
			
		}
		return $total;
	}
	//manggil fungsi
	//echo solution([-1,-3,6,-4,1,2]);
	//echo solution([1,2,3]);
	echo solution([]);
?>
