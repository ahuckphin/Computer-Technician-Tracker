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
	<div class="w3-col l12	 s12">
		<!-- Blog entry -->
		<div class="w3-card-4 w3-margin w3-white">

		<br />
		<div class="w3-container">
		<a href="index.php">return home </a>
	<br />
	<br />
				<h3><b>4. New log - Restore</b></h3>


				<p>
				<form action="new-log-restore.php" method="post" onkeydown="return event.key != 'Enter';">

					<table style="width:50%">
						<tr>
							<td>Hostname</td>
							<td><input type="text" name="Hostname"></td>
						</tr>
						<tr>
							<td>Work</td>
							<td>
								<textarea id="work" name="Work" rows="20" cols="50">
UEFI BIOS
Disabled legacy boot.
Enabled secure boot.
Disabled fast boot.
 
Windows 10 
Installed Windows 10 21H1. 
Windows hostname set.

Physical Features
DC power working.
Battery working.
USB-A port #1 working.
USB-A port #2 working.
SD card slot working.
Camera working.
Microphone working.
Speakers working.
3.5mm jack working.
VGA port working.
Mini DisplayPort port working.
Wi-Fi working.
Trackpad working.
Keyboard working.
Ethernet working.
Screen working.

Ubuntu
Installed Ubuntu 20.04.2
Ubuntu Hostname set. 

Remarks
Boot menu showing correctly.
							</textarea>
							</td>
						</tr>
						<tr>
							<td>Remarks</td>
							<td><input type="text" name="Remarks"></td>
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
				$Work = $_POST['Work'];
				$Remarks = $_POST['Remarks'];

				echo "<br>";
				

				if (empty($Hostname)) {
					echo "Please enter Computer ID";
					echo "<br>";
					echo "<br>";
				} elseif (empty($Work)) {
					echo "<br>";
					echo "<br>";
					echo "Hostname ✔";
					echo "<br>";
					echo "<br>";
					echo "Please enter work";
					echo "<br>";
					echo "<br>";
				} else {

					$Servername = "localhost";
					$Username = "root";
					$Password = "";
					$Dbname = "Computer-Technician-Tracker-Database";

					// Create connection
					$conn = new mysqli($Servername, $Username, $Password, $Dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$TwoSql = "INSERT INTO LOG (Hostname,Work,Remarks) VALUES ('$Hostname','$Work','$Remarks' )";
					if ($conn->query($TwoSql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				}
				?></p>

			</div>
		</div>
	</div>


</body>

</html>