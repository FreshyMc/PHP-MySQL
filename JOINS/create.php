<?php 
include('db_connect.php');

//CREATE ROWS IN TABLE hotelS

?>

<form method="post" action="">
	<p>Хотел</p>
	<input type="text" name="hotel_name">
	<input type="submit" name="submit" value="запиши">	
</form>

<?php 
if (!empty($_POST['submit'])) {

	$hotel_name = $_POST['hotel_name'];

	$insert_query = "INSERT INTO hotels (hotel_name) VALUES ('$hotel_name')";

	if (mysqli_query($conn, $insert_query)) {
		echo "New record created successfully";
	} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $insert_query . " - " . mysqli_error($conn);
	}



}

echo "<a href='read.php'>All Units</a>";