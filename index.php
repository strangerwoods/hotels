<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php Hotel</title>
</head>

<body>

	<form action="">
		<input type="checkbox" id="parking" name="parking">
		<label for="parking">Presenza Parking</label>
		<input type="number" name="parking_vote" id="parking_vote" placeholder="vote">
		<label for="parking_vote">Voto Parcheggio</label>
		<button>Filter</button>
	</form>

	<?php

	$hotels = [

		[
			'name' => 'Hotel Belvedere',
			'description' => 'Hotel Belvedere Descrizione',
			'parking' => true,
			'vote' => 4,
			'distance_to_center' => 10.4
		],
		[
			'name' => 'Hotel Futuro',
			'description' => 'Hotel Futuro Descrizione',
			'parking' => true,
			'vote' => 2,
			'distance_to_center' => 2
		],
		[
			'name' => 'Hotel Rivamare',
			'description' => 'Hotel Rivamare Descrizione',
			'parking' => false,
			'vote' => 1,
			'distance_to_center' => 1
		],
		[
			'name' => 'Hotel Bellavista',
			'description' => 'Hotel Bellavista Descrizione',
			'parking' => false,
			'vote' => 5,
			'distance_to_center' => 5.5
		],
		[
			'name' => 'Hotel Milano',
			'description' => 'Hotel Milano Descrizione',
			'parking' => true,
			'vote' => 2,
			'distance_to_center' => 50
		],

	];

	echo "<table>";

	echo '
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>parking</th>
			<th>vote</th>
			<th>distance to center</th>
  		</tr>';

	foreach ($hotels as $hotel) {

		if (isset($_GET["parking"]) && $_GET["parking"] == "on") {
			if ($hotel['parking'] == false) {
				continue;
			}
		}

		if (isset($_GET["parking_vote"]) && $_GET["parking_vote"] != "") {
			if ($hotel['vote'] < $_GET["parking_vote"]) {
				continue;
			}
		}

		echo "<tr>";
		echo "<td>" . $hotel['name'] . "</td>";
		echo "<td>" . $hotel['description'] . "</td>";
		echo "<td>" . $hotel['parking'] . "</td>";
		echo "<td>" . $hotel['vote'] . "</td>";
		echo "<td>" . $hotel['distance_to_center'] . "</td>";
		echo "</tr>";
	}

	echo "</table>";
	?>
</body>

</html>