<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE UNITS


	
	$hotel_id = $_GET['hotel_id'];

	$read_query = "SELECT hotels.*, town.town_name, type.type FROM hotels INNER JOIN town ON hotels.town_id = town.town_id INNER JOIN type ON hotels.type_id = type.type_id WHERE hotel_id = $hotel_id";

	$result = mysqli_query($conn, $read_query);

	if (mysqli_num_rows($result) !== 0) {
		$row = mysqli_fetch_assoc($result);

		?>

		<form method="post" action="update.php">
			<p>Хотел</p>
			<input type="text" name="hotel_name" value="<?= $row['hotel_name']?>"><br>
			<select name="town_name">
				<option value="1">Plovdiv</option>
				<option value="2">Sofia</option>
				<option value="3">Varna</option>
			</select><br>
			<select name="type">
				<option value="1">Spa</option>
				<option value="2">Universalen</option>
				<option value="3">Ski</option>
				<option value="4">Morski</option>
				<option value="5">Biznes</option>
			</select><br>
			<input type="number" name="price" value="<?= $row['price']?>"><br>

			<input type="hidden" name="hotel_id" value="<?= $row['hotel_id']?>">
			<input type="submit" name="submit" value="запиши">	
		</form>

		<?php
	}
 else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $read_query . " - " . mysqli_error($conn);
	}

echo "<a href='read.php'>Back</a>";








