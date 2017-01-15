<?php




// --------------------------------------------------------------
$data = array( 
	'first_name' => 'Pesho',
	'second_name' => 'Petrov',
	'third_name' => 'Ivanov',
	'age'       => 32,
	'proffesion' => 'dentist',
	'status'   => 'worker'
	);

echo '<table border="1"';
echo '<tr>';
echo '<td> first name - '.$data['first_name'].'</td>' ;
echo '<td> first name - '.$data['second_name'].'</td>' ;
echo '<td> first name - '.$data['third_name'].'</td></tr>' ;
echo '<tr>';
echo '<td> age - '.$data['age'].'</td>' ;
echo '<td> proffesion - '.$data['proffesion'].'</td>' ;
echo '<td> status - '.$data['status'].'</td>' ;
echo '</tr>';
echo '</table>';