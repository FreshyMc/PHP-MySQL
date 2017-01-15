<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php $_PHP_SELF?>" method="POST">
		First side:<input type="text" name="side1" value="" /><br>
		Second side:<input type="text" name="side2" value="" /><br>
		Third side:<input type="text" name="side3" value="" />
		<input type="submit" name="submit" value="Send"/>
	</form>
	<?php
	$a = $_POST["side1"]
	$b = $_POST["side2"]
	$c = $_POST["side3"]
	if(!empty($_POST['submit'])) {
		if($a+$b>$c
			&&$a+$c>$b
			&&$b+$c>$a){
			echo "Possible";

	}else {
		echo "Impossible";}
	}
}
?>
</body>
</html>