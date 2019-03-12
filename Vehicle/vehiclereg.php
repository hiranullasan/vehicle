<!DOCTYPE html>
	<html>
	<head><h1><center>VEHICLE REGISTRATION</center> </h1></head>
	<body>
		<form action="list.php" method="POST" name="form" id="form" enctype="multipart/form-data">
			<table align="center" cellpadding="10">
				<tr>
					<td colspan="2"> VEHICLE NAME :</td>
					<td colspan="2"><input type="text" name="name" id="name" ></td>
				</tr>
				<tr>
					<td colspan="2">NUMBER OF WHEELS :</td>
					<td colspan="2"><input type="text" name="wheel" id="wheel"></td>
				</tr>
				<tr>
					<td colspan="2">VEHICLE TYPE :</td>
					<td colspan="2"><select name="type">
						<option value="twowheeler">Motor-bike</option>
						<option value="heavy">Heavy Vehicle</option>
						<option value="light">Light Vehicle</option>
					</select></td>
				</tr>
				<tr>
					<td colspan="2">COLOR :</td>
					<td colspan="2"><input type="text" name="color" id="color"></td>
				</tr>
				<tr>
					<td colspan="2">REGISTRATION NUMBER :</td>
					<td colspan="2"><input type="text" name="number" id="number"></td>
				</tr>
				<tr>
					<td colspan="2">DATE :</td>
					<td colspan="2"><input type="date" name="date" id="date"></td>
				</tr>
				<tr>
					<td colspan="2">IMAGE :</td>
					<td colspan="2"><input type="file" name="image" id="image" accept="image/*"></td>
				</tr>
				<tr>
					<td><input type="submit" name= "submit" value="submit"></td>
				</tr>
				
			</table>
		</form>
	</body>
	</html>