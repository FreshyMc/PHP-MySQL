<?php 

$arr = []; //prazen masiv
$row = 4; //broi redici
$col = 10;  //broi coloni
$num = 1; //stoinost v parvata kletka

for ($i=0; $i < $row; $i++) {  //sazdava 4 redici
	for($j = 0; $j < $col; $j++){  //sazdava 10 koloni
		$arr[$i][$j] = $num;   //izpisva stoinost v kletkata
		$num++;  //uvelichava stoinostta s 1 pri vsiako sledvashto zavartane na cikala, t.e. vsiaka sledvashta kletka
	}
}

echo "<table border=1>";
for ($i=0; $i < $row; $i++) { 
	echo "<tr>";
	for ($j=0; $j < $col; $j++) { 
		echo "<td>".$arr[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "</table>";