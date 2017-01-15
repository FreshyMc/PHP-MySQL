<?php
$name = $_POST['name'];
$town = $_POST['town'];
	if (isset($_POST['submit'])) {
		echo $name." your favourite town is".$town;
	}
?>