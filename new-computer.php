<!DOCTYPE html>
<html>
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

			<div class="w3-container">

</br>
<a href="index.php">return home </a>
	<br />
	<br />

			<h3><b>2. New computer</b></h3>


				<p>
				<form action="new-computer.php" method="post" onkeydown="return event.key != 'Enter';">

					<table style="width:50%">
						<tr>
							<td>Hostname</td>
							<td><input type="text" name="Hostname"></td>
						</tr>
						<tr>
							<td>Make and Model</td>
							<td><input type="text" name="MakeAndModel"></td>
						</tr>
						<tr>
							<td>Serial Number</td>
							<td><input type="text" name="SerialNumber"></td>
						</tr>
						<tr>
							<td>Windows Key</td>
							<td><input type="text" name="WindowsKey"></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>
								<select id="Status" name="Status" size="3" >
									<option value="Red">Red</option>
									<option value="Yellow">Yellow</option>
									<option value="Green">Green</option>

								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit"></td>
						</tr>
					</table>



					</br>
					</br>
				</form>

				<?php

				$Hostname = $_POST['Hostname'];
				$MakeAndModel = $_POST['MakeAndModel'];
				$SerialNumber = $_POST['SerialNumber'];
				$WindowsKey = $_POST['WindowsKey'];
				$Status = $_POST['Status'];

				if (empty($Hostname)) {
					echo "Please enter hostname";
					echo "<br>";
					echo "<br>";
				} elseif (empty($MakeAndModel)) {
					echo "Hostname ✔";
					echo "<br>";
					echo "<br>";
					echo "Please enter make and model";
					echo "<br>";
					echo "<br>";
				} elseif (empty($SerialNumber)) {
					echo "Hostname ✔";
					echo "<br>";
					echo "<br>";
					echo "Make and Model ✔";
					echo "<br>";
					echo "<br>";
					echo "Please enter serial number";
					echo "<br>";
					echo "<br>";
				} elseif (empty($Status)) {
					echo "Hostname ✔";
					echo "<br>";
					echo "<br>";
					echo "Make and model ✔";
					echo "<br>";
					echo "<br>";
					echo "Serial number ✔";
					echo "<br>";
					echo "<br>";
					echo "Please enter status";
					echo "<br>";
					echo "<br>";
				} else {



					$Servername = "localhost";
					$Username = "root";
					$Password = "";
					$Dbname = "psc";

					// Create connection
					$conn = new mysqli($Servername, $Username, $Password, $Dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "INSERT INTO DETAILS (Hostname,MakeAndModel,SerialNumber,WindowsKey,Status) VALUES ('$Hostname','$MakeAndModel','$SerialNumber','$WindowsKey','$Status' )";
					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				}
				?></p>

			</div>
		</div>
		<hr>

</body>

</html>