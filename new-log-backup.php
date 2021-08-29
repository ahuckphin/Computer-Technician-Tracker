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
	<div class="w3-col l12 s12">
		<!-- Blog entry -->
		<div class="w3-card-4 w3-margin w3-white">

			<br />
			<div class="w3-container">
				<a href="index.php">return home </a>
				<br />
				<br />
				<h3><b>3. New log - Backup</b></h3>

				<form action="new-log-backup.php" method="post" onkeydown="return event.key != 'Enter';">

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
								<input type="checkbox" name="work[]" value="Up to date. ">
								<label for="work[]">Up to date.</label><br>
								<input type="checkbox" name="work[]" value="Device Manager cleared. ">
								<label for="work[]">Device Manager cleared.</label><br>
								<input type="checkbox" name="work[]" value="Admin password set. ">
								<label for="work[]"></label>Admin password set.<br>
								<input type="checkbox" name="work[]" value=" Windows hostname set. ">
								<label for="work[]"> Windows hostname set. </label><br>
								<input type="checkbox" name="work[]" value="Admin Bluetooth turned off. ">
								<label for="work[]">Admin Bluetooth turned off.</label><br>
								<input type="checkbox" name="work[]" value="Admin green tick shield. ">
								<label for="work[]">Admin green tick shield.</label><br>
								<input type="checkbox" name="work[]" value="Admin unpin groups from start menu. ">
								<label for="work[]">Admin unpin groups from start menu.</label><br>
								<input type="checkbox" name="work[]" value="Admin uninstall bloatware. ">
								<label for="work[]">Admin uninstall bloatware.</label><br>
								<input type="checkbox" name="work[]" value="Admin dismissed Edge sign in message. ">
								<label for="work[]">Admin dismissed Edge sign in message.</label><br>
								<input type="checkbox" name="work[]" value="Guest account created. ">
								<label for="work[]">Guest account created.</label><br>
								<input type="checkbox" name="work[]" value="Installed EXE App Inventor. ">
								<label for="work[]">Installed EXE App Inventor.</label><br>
								<input type="checkbox" name="work[]" value="Installed EXE EV3 Lab. ">
								<label for="work[]">Installed EXE EV3 Lab.</label><br>
								<input type="checkbox" name="work[]" value="Installed EXE Java. ">
								<label for="work[]">Installed EXE Java.</label><br>
								<input type="checkbox" name="work[]" value="Installed EXE LibreOffice. ">
								<label for="work[]">Installed EXE LibreOffice.</label><br>
								<input type="checkbox" name="work[]" value="Installed EXE SketchUp Make 2017. ">
								<label for="work[]">Installed EXE SketchUp Make 2017.</label><br>
								<input type="checkbox" name="work[]" value="Installed EXE Visual Studio Code. ">
								<label for="work[]">Installed EXE Visual Studio Code.</label><br>
								<input type="checkbox" name="work[]" value="Installed UWP Arduino. ">
								<label for="work[]">Installed UWP Arduino.</label><br>
								<input type="checkbox" name="work[]" value="Installed UWP Blender. ">
								<label for="work[]">Installed UWP Blender.</label><br>
								<input type="checkbox" name="work[]" value="Installed UWP EV3 Classroom. ">
								<label for="work[]">Installed UWP EV3 Classroom.</label><br>
								<input type="checkbox" name="work[]" value="Installed UWP MakeCode. ">
								<label for="work[]">Installed UWP MakeCode.</label><br>
								<input type="checkbox" name="work[]" value="Installed UWP Python. ">
								<label for="work[]">Installed UWP Python.</label><br>
								<input type="checkbox" name="work[]" value="Installed UWP Scratch. ">
								<label for="work[]">Installed UWP Scratch.</label><br>
								<input type="checkbox" name="work[]" value="Tested App  Inventor. ">
								<label for="work[]">Tested App Inventor.</label><br>
								<input type="checkbox" name="work[]" value="Tested EV3 Lab. ">
								<label for="work[]">Tested EV3 Lab.</label><br>
								<input type="checkbox" name="work[]" value="Tested LibreOffice. ">
								<label for="work[]">Tested LibreOffice.</label><br>
								<input type="checkbox" name="work[]" value="Tested SketchUp Make 2017. ">
								<label for="work[]">Tested SketchUp Make 2017.</label><br>
								<input type="checkbox" name="work[]" value="Tested Visual Studio Code. ">
								<label for="work[]">Tested Visual Studio Code.</label><br>
								<input type="checkbox" name="work[]" value="Tested Arduino. ">
								<label for="work[]">Tested Arduino.</label><br>
								<input type="checkbox" name="work[]" value="Tested Blender. ">
								<label for="work[]">Tested Blender.</label><br>
								<input type="checkbox" name="work[]" value="Tested EV3 Classroom. ">
								<label for="work[]">Tested EV3 Classroom.</label><br>
								<input type="checkbox" name="work[]" value="Tested MakeCode. ">
								<label for="work[]">Tested MakeCode.</label><br>
								<input type="checkbox" name="work[]" value="Tested Python. ">
								<label for="work[]">Tested Python.</label><br>
								<input type="checkbox" name="work[]" value="Tested Scratch. ">
								<label for="work[]">Tested Scratch.</label><br>
								<input type="checkbox" name="work[]" value="Guest applied PSC wallpaper. ">
								<label for="work[]">Applied PSC wallpaper.</label><br>
								<input type="checkbox" name="work[]" value="Guest turned off Bluetooth. ">
								<label for="work[]">Guest turned off Bluetooth.</label><br>
								<input type="checkbox" name="work[]" value="Guest green tick shield. ">
								<label for="work[]">Guest green tick shield. </label><br>
								<input type="checkbox" name="work[]" value="Guest unpin groups from start menu. ">
								<label for="work[]">Guest unpin groups from start menu.</label><br>
								<input type="checkbox" name="work[]" value="Guest uninstall bloatware. ">
								<label for="work[]">Guest uninstall bloatware.</label><br>
								<input type="checkbox" name="work[]" value="Guest dismissed Edge sign in message. ">
								<label for="work[]">Guest dismissed Edge sign in message.</label><br>
								<input type="checkbox" name="work[]" value="Guest added Chinese keyboard. ">
								<label for="work[]">Guest added Chinese keyboard.</label><br>
								<input type="checkbox" name="work[]" value="Deleted folders from driver installation. ">
								<label for="work[]">Deleted folders from driver installation.</label><br>
								<input type="checkbox" name="work[]" value="Disk Clean-up ">
								<label for="work[]">Disk Clean-up</label><br>
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
								<input type="checkbox" name="work[]" value="Run setup script file. ">
								<label for="work[]">Run setup script file.</label><br>
								<input type="checkbox" name="work[]" value="Tested Arduino. ">
								<label for="work[]">Tested Arduino.</label><br>
								<input type="checkbox" name="work[]" value="Tested Blender. ">
								<label for="work[]">Tested Blender.</label><br>
								<input type="checkbox" name="work[]" value="Tested Python. ">
								<label for="work[]">Tested Python.</label><br>
								<input type="checkbox" name="work[]" value="Tested Scratch. ">
								<label for="work[]">Tested Scratch.</label><br>
								<input type="checkbox" name="work[]" value="Tested Visual Studio Code. ">
								<label for="work[]">Tested Visual Studio Code.</label><br>
								<input type="checkbox" name="work[]" value="Ubuntu Hostname set. ">
								<label for="work[]">Ubuntu Hostname set. </label><br>

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



					</br>
					</br>
				</form>

				<?php

				$Hostname = $_POST['Hostname'];
				$Work = $_POST['Work'];
				$Remarks = $_POST['Remarks'];
				$WindowsKey = $_POST['WindowsKey'];

				echo "<br>";

				if (empty($Hostname)) {
					echo '<span style="color:Red;"><b>"Please enter Hostname"</b></span>';
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
					} else {
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

						foreach ($_POST["work"] as $work) {
							$TotalWork = $TotalWork . $work;
						}
						if (empty($TotalWork)) {
							echo '<span style="color:Red;"><b>"Please check a checkbox";</b></span>';
							echo "</br>";
							echo "</br>";
						} else {

							$Sql = "INSERT INTO Log (Hostname,Work,Remarks) VALUES ('$Hostname','$TotalWork','$Remarks' )";
							if ($conn->query($Sql) === TRUE) {

								//inserting of details from checklist into log table successful. 

								echo '<span style="color:Green;"><b>"New record created successfully"</b></span>';
								echo "</br>";
								echo "</br>";

								$Sql = "UPDATE `details` SET `Status` = 'Yellow' WHERE `details`.`Hostname` = '$Hostname'";
								if ($conn->query($Sql) === TRUE) {

									//updating of status in details table successful.	

									echo '<span style="color:Green;"><b>"Status updated successfully"</b></span>';
									echo "</br>";
									echo "</br>";
								} else {

									//updating of status in details table unsuccessful.	

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
						}
					}

					$conn->close();
				}

				?>


			</div>
		</div>
	</div>

</body>

</html>