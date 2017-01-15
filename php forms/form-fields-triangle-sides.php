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
 if(!empty($_POST['submit']))
 {
if($_POST["side1"]+$_POST["side2"]>$_POST["side3"]{
&&$_POST["side1"]+$_POST["side3"]>$_POST["side2"]
&&$_POST["side2"]+$_POST["side3"]>$_POST["side1"])
	echo "Yes";
}else {
echo "No";}
}
 ?>
</body>
</html>