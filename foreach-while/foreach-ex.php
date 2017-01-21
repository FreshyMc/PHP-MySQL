<?php
// $age = array('Peter' => 35 , 'Ben' => 37, 'Joe' => 43);

// foreach ($age as $key => $value) {
// 	echo $key." - ".$value."<br>";
// }

// $num = array(1,2,3,4,5);

// foreach ($num as $value) {
// 	echo "The value is ".$value."<br>";
// }

$login = array('misho22' => 'kamata1', 'tonika' => 'tonka2', 'zaio' => 'mecho_puh');
foreach ($login as $user => $pass) {
	echo "Login data - user: ".$user.", pass: ".$pass."<br>";
}