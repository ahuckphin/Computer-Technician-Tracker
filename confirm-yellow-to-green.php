<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
	body {
		border-spacing: 10px 0;
		background-color: #F1F1F1;
	}

	html,
	body,
	h1,
	h2,
	h3,
	h4,
	h5 {
		font-family: "Raleway", sans-serif
	}
</style>

<body>




	<!-- Blog entries -->
	<div class="w3-col l12 s12">
		<!-- Blog entry -->
		<div class="w3-card-4 w3-margin w3-white">

			</br>
			<div class="w3-container">
				<a href="index.php">return home </a>
				<br />
				<br />

				<h3><b>6. Confirmed - Update Status from Yellow to Green</b></h3>			 

				<?php

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "Computer-Technician-Tracker-Database";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} else {



					$sql = "SELECT * FROM details WHERE Status = 'Yellow' ORDER BY Hostname ASC ";
					$result = $conn->query($sql);
 	

					echo "<table>";

					if ($result->num_rows > 0) {

						// output data of each row
						while ($row = $result->fetch_assoc()) {

							echo "<tr>";
							echo "<td>" . $row['Hostname'] . "</td>";
							echo "</tr>";

							$CurrentHostname = $row['Hostname'];
							$Sql2 = "UPDATE `details` SET `Status` = 'Green' WHERE `details`.`Hostname` = '$CurrentHostname'";
							$conn->query($Sql2); 

						}

						echo "</table>";
						echo "</br>";
						echo "<b>Total computers with updated status from Yellow to Green: </b>" . $result->num_rows;
						echo "</br>";
						echo "</br>";

					} else {
						echo "0 results";
					}


					$conn->close();
				}


				?>

			</div>
		</div>
		<hr>



</body>

</html>