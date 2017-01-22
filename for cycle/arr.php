<?php 
	$masiv = array();
	$sum = 0;
	
	for($i = 1; $i <= 10; $i++){
		$rnd = rand($i, 20);
		array_push($masiv,$rnd);

	}
	print_r($masiv);
	$count = count($masiv);
	$sum = array_sum($masiv);
	echo "<br>suma".$sum."<br>";
	$avg = $sum/$count;
	echo "sredno".$avg."<br>";

	
