<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE UNITS
	
	$hotel_id 	= $_GET['hotel_id'];

	$date = date('Y-m-d');


	$delete_query = "UPDATE `hotels` SET `date_deleted`= '$date' WHERE `hotel_id` = $hotel_id ";

	$result = mysqli_query($conn, $delete_query);

	if ($result) {
		return header('Location: read.php');  
	} else {
	echo "Error: " . $update_query . " - " . mysqli_error($conn);

	}

	








