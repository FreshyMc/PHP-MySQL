<?php

$m=5;
$n=5;
$num=10;
$c=11;
$arr = array(array());

for ($i=0; $i<$n; $i++) {
	for ($j=0; $j<$m; $j++) {
	$arr[$i][$j] = $num;
	$num=$num+1;
	}

	$c=$c*10+1; 
	$num=$c;
}
echo "<table border='1'>";
for ($q=0; $q<$n; $q++){
	echo "<tr>";
	for ($p=0; $p<$m; $p++){

	echo "<td>".$arr[$p][$q]."</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>

