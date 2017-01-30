<?php

$m=4;  //redici
$n=6;  // coloni
$num = 0;
$num2 = 5;

for ($i=0; $i < $m; $i++) { 
	for ($j=0; $j <$n ; $j++) { 
		$arr[$i][$j] = $num;  
		 $num+=$num2;
		
	}
}
echo "<table border='1px'>";
for ($p=0; $p <$m ; $p++) { 
	echo "<tr>";
	for ($q=0; $q <$n ; $q++) { 
		echo "<td>" .$arr[$p][$q]."</td>";
	}
	echo "</tr>";
}
echo "</table>";


?>
