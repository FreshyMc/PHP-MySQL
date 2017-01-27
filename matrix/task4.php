

<?php

// $m=7;
// $n=6;
//function my_func($m, $n){
$m = 7;
$n = 6;
$num=11;
$c=10;
//$arr = array(array());

for ($i=0; $i<$m; $i++) {
	for ($j=0; $j<$n; $j++) {
	$arr[$i][$j] = $num;
	$num=$c+$num;

	}

	$c=$c*10+1; 
	$num=$c;
}
echo "<table border='1'>";
for ($q=0; $q<$m; $q++){
	echo "<tr>";
	for ($p=0; $p<$n; $p++){

	echo "<td>".$arr[$q][$p]."</td>";
	}
	echo "</tr>";
}
echo "</table>";	


//my_func(7,6);



