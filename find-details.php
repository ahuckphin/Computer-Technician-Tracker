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

				<h3><b>1. Find details</b></h3>


				<p>
				<form action="find-details.php" method="post">
					Hostname: <input type="text" name="ID"><br><br>
					<input type="submit">
					</br>
					</br>
				</form>

				<?php
				$name = $_POST['ID'];

				echo "</br>";

				if (empty($name)) {
					echo "ID not found";
					echo "<br>";
					echo "<br>";
				}

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


					$sql = "SELECT * FROM details WHERE Hostname = '$name'	 ";
					$result = $conn->query($sql);



					echo "<table>";

					if ($result->num_rows > 0) {

						// output data of each row
						while ($row = $result->fetch_assoc()) {

							echo "<tr>";
							echo "<td> <b>ID </b></td>";
							echo "<td>" . $row['ID'] . "</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Hostname </b></td>";
							echo "<td>" . $row['Hostname'] . "</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Hostname</b> </td>";
							echo "<td> <img src='barcode.php?s=code-128&d=" . $row['Hostname'] . " ' > </td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Make and Model</b> </td>";
							echo "<td>" . $row['MakeAndModel'] . "</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Serial Number</b> </td>";
							echo "<td>" .  $row['SerialNumber'] .  "</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Windows Key</b></td>";
							echo "<td>" . $row['WindowsKey'] . "</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Windows Key</b> </td>";
							echo "<td> <img src='barcode.php?s=code-128&d=" . $row['WindowsKey'] . " ' > </td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Status</b> </td>";
							echo "<td>" . $row['Status'] . "</td>";
							echo "</tr>";
						}

						echo "</table>";
					} else {
						echo "0 results";
					}

					$sql = "SELECT * FROM log WHERE Hostname = '$name'	 ";
					$result = $conn->query($sql);

					echo "<br/>";
					echo "<br/>";

					echo "<b>Log</b>";

					echo "<br/>";

					echo "<table>";

					if ($result->num_rows > 0) {

						// output data of each row
						while ($row = $result->fetch_assoc()) {

							echo "<tr>";
							echo "<td> --------- </td>";
							echo "<td> </td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Date </b></td>";
							echo "<td>" . $row['Date'] . "</td>";
							echo "</tr>";

							echo "<tr>";
							echo "<td> <b>Work </b></td>";
							echo "<td>" . $row['Work'] . "</td>";
							echo "</tr>";


							echo "<tr>";
							echo "<td> <b>Remarks </b> </td>";
							echo "<td>" . $row['Remarks'] . "</td>";
							echo "</tr>";
						}

						echo "</table>";
					} else {
						echo "0 results";
					}

					$conn->close();
				}

				?></p>

			</div>
		</div>
		<hr>



</body>

</html>