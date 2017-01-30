<?php 
// function my_func($r, $c){

// // $r = 4;
// // $c = 5;
// 	for($i = 0; $i < $r; $i++){
// 		for($j = 0; $j <$c; $j++){
// 			$check = $c - $i -1;
// 			if($j == $check){
// 				$arr[$i][$j] = '0';
// 			}
// 			else {
// 				$arr[$i][$j] = '-'; 
// 			}
// 		}
// 	}
// echo "<table border=1>";
// 	for($m = 0; $m < $r; $m++){
// 		echo "<tr>";
// 		for($n = 0; $n < $c; $n++){
// 			echo "<td>".$arr[$m][$n]."</td>";
// 		}
// 		echo "</tr>";
// 	}
// 	echo "</table>";
//  }
 
//  my_func(6, 7);

//  my_func(25,25);
////////////////////////////////////
// function num($a, $b){
// 	$c = $a+$b;
// 	echo "$a+$b=".$c;
// 	//echo $c;
// }

// num(4,5);

/////////////////////////////////


// function fun($m,$n){

// $x=1;
// //$c=10;
// for ($i=0; $i <$m ; $i++) { 
// 	for ($j=0; $j <$n ; $j++) { 
// 		$arr[$i][$j]=$x;
		
// 	$x++;
// 	}
	
// }

// echo "<table border='1'>";
// for ($p=0; $p <$m ; $p++) { 
// 	echo "<tr>";
// 	for ($q=0; $q <$n ; $q++) { 
// 		echo "<td>".$arr[$p][$q]."</td>";
// 	}
// 	echo "</tr>";
// }
// echo "</table>";
// }
// // $a=8;
// // $b=5;
// fun(8,5);

/////////////////////////////

function matrica($num,$num1, $rows, $cols)
{

// $rows=5;
// $cols=5;
for($i=0;$i<$rows;$i++){
	for ($j=0; $j<$cols; $j++) { 
		$arr[$i][$j]=$num;
		$num+=$num1;
	}
}
echo "<table border='1'>";
for($i=0;$i<$rows;$i++){
	echo "<tr>";
	for ($j=0; $j<$cols; $j++) { 
		echo "<td>".$arr[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
}

echo matrica(0,5,4,10);