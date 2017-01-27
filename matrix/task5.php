<?php 
//function print_array($col, $row){
$col=5;
$row=4;
	for($i = 0; $i < $row; $i++){
		if($i%2==0){
			$num = 0;
		}
		else{
			$num = 1;
		}
		for($j = 0; $j < $col; $j++){
			$arr[$i][$j] = $num;
			//$num=$num*10;
		}
	}
	echo "<table border=1>";
	for($n = 0; $n < $col; $n++){
		echo "<tr>";
		for($m = 0; $m < $row; $m++){
			
			echo "<td>".$arr[$m][$n]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
// }
// print_array(5, 4);