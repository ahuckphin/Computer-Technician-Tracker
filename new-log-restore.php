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

	input[type='checkbox'] {

		width: 25px;
		height: 25px;

	}

	input[type='text'] {

		width: 100%;

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

					<table>
						<tr>
							<td>Hostname</td>
							<td><input type="text" name="Hostname"></td>
						</tr>
						<tr>
							<td>Work</td>
							<td>
								UEFI BIOS
								<br />
								<input type="checkbox" name="work[]" value="Reset UEFI BIOS. ">
								<label for="work[]"> Reset UEFI BIOS. </label><br>
								<input type="checkbox" name="work[]" value="Disabled legacy boot. ">
								<label for="work[]">Disabled legacy boot. </label><br>
								<input type="checkbox" name="work[]" value="Enabled secure boot. ">
								<label for="work[]">Enabled secure boot.</label><br>
								<input type="checkbox" name="work[]" value="Disabled fast boot. ">
								<label for="work[]">Disabled fast boot.</label><br>
								<input type="checkbox" name="work[]" value="Disabled RST. ">
								<label for="work[]">Disabled RST.</label><br>
								<input type="checkbox" name="work[]" value="Disabled FN lock. ">
								<label for="work[]">Disabled FN lock. </label><br>
								<input type="checkbox" name="work[]" value="Boot menu showing correctly. ">
								<label for="work[]">Boot menu showing correctly.</label><br>
								<br />
								Windows 10
								<br />
								<input type="checkbox" name="work[]" value="Installed Windows 10 21H1. ">
								<label for="work[]"> Installed Windows 10 21H1. </label><br>
								<input type="checkbox" name="work[]" value=" Windows hostname set. ">
								<label for="work[]"> Windows hostname set. </label><br>
								<br />
								Physical Features
								<br />
								<input type="checkbox" name="work[]" value=" DC power working. ">
								<label for="work[]"> DC power working. </label><br>
								<input type="checkbox" name="work[]" value="Battery working. ">
								<label for="work[]"> Battery working. </label><br>
								<input type="checkbox" name="work[]" value="USB-A port #1 working. ">
								<label for="work[]"> USB-A port #1 working. </label><br>
								<input type="checkbox" name="work[]" value="USB-A port #2 working. ">
								<label for="work[]">USB-A port #2 working. </label><br>
								<input type="checkbox" name="work[]" value="USB-A port #3 working. ">
								<label for="work[]"> USB-A port #3 working. </label><br>
								<input type="checkbox" name="work[]" value="USB-A port #4 working. ">
								<label for="work[]">USB-A port #4 working. </label><br>
								<input type="checkbox" name="work[]" value="SD card slot working. ">
								<label for="work[]">SD card slot working. </label><br>
								<input type="checkbox" name="work[]" value="Camera working. ">
								<label for="work[]">Camera working. </label><br>
								<input type="checkbox" name="work[]" value="Microphone working. ">
								<label for="work[]">Microphone working. </label><br>
								<input type="checkbox" name="work[]" value="Speakers working. ">
								<label for="work[]">Speakers working. </label><br>
								<input type="checkbox" name="work[]" value="3.5mm jack working. ">
								<label for="work[]">3.5mm jack working. </label><br>
								<input type="checkbox" name="work[]" value="VGA port working. ">
								<label for="work[]">VGA port working. </label><br>
								<input type="checkbox" name="work[]" value="HDMI port working. ">
								<label for="work[]">HDMI port working. </label><br>
								<input type="checkbox" name="work[]" value="Micro HDMI port working. ">
								<label for="work[]">Micro HDMI port working. </label><br>
								<input type="checkbox" name="work[]" value="DisplayPort port working. ">
								<label for="work[]">DisplayPort port working. </label><br>
								<input type="checkbox" name="work[]" value="Mini DisplayPort port working. ">
								<label for="work[]">Mini DisplayPort port working. </label><br>
								<input type="checkbox" name="work[]" value="Wi-Fi working. ">
								<label for="work[]">Wi-Fi working. </label><br>
								<input type="checkbox" name="work[]" value="Trackpad working. ">
								<label for="work[]">Trackpad working. </label><br>
								<input type="checkbox" name="work[]" value="Keyboard working. ">
								<label for="work[]">Keyboard working. </label><br>
								<input type="checkbox" name="work[]" value="Ethernet working. ">
								<label for="work[]">Ethernet working. </label><br>
								<input type="checkbox" name="work[]" value="Screen working. ">
								<label for="work[]">Screen working. </label><br>
								<br />
								Ubuntu
								<br />
								<input type="checkbox" name="work[]" value="Installed Ubuntu 20.04.2. ">
								<label for="work[]">Installed Ubuntu 20.04.2 </label><br>
								<input type="checkbox" name="work[]" value="Ubuntu Hostname set. ">
								<label for="work[]">Ubuntu Hostname set.</label><br>


							</td>
						</tr>
						<tr>
							<td>Remarks</td>
							<td><input type="text" name="Remarks"></td>
						</tr>
						<tr>
							<td>Windows Key</td>
							<td><input type="text" name="WindowsKey"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit"></td>
						</tr>
					</table>

					<?php

					$Hostname = $_POST['Hostname'];	
					$Work = $_POST['work'];
					$Remarks = $_POST['Remarks'];
					$WindowsKey = $_POST['WindowsKey'];

					echo "<br>";


					if (empty($Hostname)) {
						echo "Please enter Hostname";
						echo "<br>";
						echo "<br>";
					} else {

						

						foreach ($_POST["work"] as $work) {
							$TotalWork = $TotalWork . $work;
						}
						if (empty($TotalWork)) {
							echo "Please check a checkbox";
							echo "</br>";
							echo "</br>";
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

							$Sql = "INSERT INTO Log (Hostname,Work,Remarks) VALUES ('$Hostname','$TotalWork','$Remarks' )";
							if ($conn->query($Sql) === TRUE) {

								//inserting of details from checklist into log table successful. 

								echo "New record created successfully";
								echo "</br>";
								echo "</br>";

								$Sql = "UPDATE `details` SET `Status` = 'Yellow' WHERE `details`.`Hostname` = '$Hostname'";
								if ($conn->query($Sql) === TRUE) {

									//updating of status in details table successful.	

									echo "Status updated successfully";
									echo "</br>";
									echo "</br>";

									if (!empty($WindowsKey)) {
										$Sql = "UPDATE `details` SET `WindowsKey` = '$WindowsKey' WHERE `details`.`Hostname` = '$Hostname'";
										if ($conn->query($Sql) === TRUE) {
											echo "Windows key updated successfully";
											echo "</br>";
											echo "</br>";
										} else {
											echo "Error: " . $sql . "<br>" . $conn->error;
											echo "</br>";
											echo "</br>";
										}
									}
								} else {

									//updating of status in details table successful.	

									echo "Error: " . $sql . "<br>" . $conn->error;
									echo "</br>";
									echo "</br>";
								}
							} else {

								//inserting of details from checklist into log table unsuccessful.

								echo "Error: " . $sql . "<br>" . $conn->error;
								echo "</br>";
								echo "</br>";
							}

							$conn->close();
						}
					}
					?>

					</br>
					</br>
				</form>

				</p>

			</div>
		</div>
	</div>


</body>

</html>