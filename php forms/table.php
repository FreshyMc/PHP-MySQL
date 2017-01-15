<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$data=array( 'first_name' => 'Pesho', 
			'second_name' => 'Georgiev', 
			'third_name' => 'Todorov' , 
			'age' => '34' , 
			'profesion' => 'teacher');

echo'<table border="1">';
echo'<tr>';
 echo'<td> first name - ' .$data['first_name']. '</td>'  ;
 echo'<td> sec name - ' .$data['second_name']. '</td>'  ;
  echo'<td> third name - ' .$data['second_name']. '</td>'  ;
echo'<tr>';  
   echo'<td> age  - ' .$data['age']. '</td>'  ;
    echo'<td> profesion - ' .$data['profesion']. '</td>'  ;
echo'<tr>';
echo'</table>';
?>

<?php
if (!empty($_GET['submit'])) {
	echo 'First name' .$_GET['first_name'];
	echo 'Age' .$_GET['age'];
	var_dump[$_GET];
	}
	?>
	
	


</body>
</html>