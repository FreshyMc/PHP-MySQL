<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE hotels
	
	$hotel_id 	= $_POST['hotel_id'];
	$hotel_name = $_POST['hotel_name'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$town = $_POST['town_name'];

	$update_query = "UPDATE `hotels` SET `hotel_name`= '$hotel_name',`town_id`= '$town', `price`='$price', `type_id`='$type' 
-- join....
	WHERE `hotel_id` = $hotel_id ";

	$result = mysqli_query($conn, $update_query);
	if ($result) {
		echo "Success!";
	} else {
	echo "Error: " . $update_query . " - " . mysqli_error($conn);

	}

	
echo "<a href='read.php'>Back</a>";








