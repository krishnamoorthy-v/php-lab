<!DOCTYPE html>
<html>
<head>
	<title>Date calculation</title>
</head>
<body>
	<h1> Date calculation</h1>
	<form method="post" action = "Dates.php">
		<input type ="date" name = "datestr">
		<input type="date" name="datestr1">
		<input type ="submit" name = "submit" value = "calculate"><br>
		<?php
			error_reporting(0);
			if(isset($_POST["submit"]))
			{
				$date1 = new DateTime($_POST['datestr']);
				$date2 = $date1 -> diff(new DateTime($_POST[datestr1]));
			}
			echo "<p>".$date2 -> days."Total days.</p>";
			echo "<p>".$date2 -> y."years.</p>";
			echo "<p>".$date2 -> m."months.</p>";
			echo "<p>".$date2 -> d."days.</p>";
		?> 
		
	</form>
</body>
</html>