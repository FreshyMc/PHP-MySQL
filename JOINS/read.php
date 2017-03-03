<?php 
include('db_connect.php');

//READ ROWS FROM TABLE UNITS


$read_query = "SELECT * FROM hotels JOIN town ON hotels.town_id = town.town_id JOIN type ON hotels.type_id = type.type_id WHERE hotels.date_deleted IS NULL";

$result = mysqli_query($conn, $read_query);

if (mysqli_num_rows($result) >0) {
	echo "<table border=1>";
	echo "<tr><td>HOTEL NAME</td><td>TOWN</td><td>TYPE</td><td>PRICE</td><td>UPDATE</td><td>DELETE</td></tr>";
	while($row = mysqli_fetch_assoc($result)){
		
			echo "<tr>";	
				
				echo "<td>" . $row['hotel_name'] . "</td>";
				echo "<td>" . $row['town_name'] . "</td>";
				echo "<td>" . $row['type'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";

				echo "<td><a href='update_view.php?hotel_id=" .$row['hotel_id'] . "'>update</a></td>";
				echo "<td><a href='delete.php?hotel_id=" .$row['hotel_id'] . "'>delete</a></td>";
				
						echo "</tr>";
			
	}
	echo "</table>";
} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
	//echo "Error: " . $read_query . " - " . mysqli_error($conn);

	echo "Nothing found!<br>";
	echo "<a href='create.php'>Enter new hotel</a>";
}



