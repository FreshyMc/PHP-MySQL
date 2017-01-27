<?php

$m=5;
$n=5;
$num=10;  //7
//function my_function ($m, $n){
$c=110;  //7
//$arr = array(array());

for ($i=0; $i<$n; $i++) {
	$num=7+$c*$i;                  
	for ($j=0; $j<$m; $j++) {
	$arr[$i][$j] = $num;          
	$num=$num+7;			//$num+=7;

	}
					//$c=$c+110; num=$c;
}
echo "<table border='1'>";
for ($q=0; $q<$n; $q++){
	echo "<tr>";
	for ($p=0; $p<$m; $p++){

	echo "<td>".$arr[$p][$q]."</td>";
	}
	echo "</tr>";
}
echo "<table>";

// }

// my_function($m, $n);



