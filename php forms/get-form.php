<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="get-form.php" method="post">
	Въведете име:<input type="text" name="myname" value="" /><br>
	Въведете години:<input type="text" name="age" value="" />
	<input type="submit" name="submit" value="submit" />
</form>
<?php
if (!empty($_POST['submit'])) 
$name = $_POST['myname'];	
$age = $_POST['age'];

echo 'Your name is '.$name.' and your age is '.$age;
?>
</body>
</html>