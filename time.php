<!DOCTYPE html>
<html>
<head>
	<title>Check Country time</title>
</head>
<body>
	<form method="post" action="time.php">
		<h2>choose any one country to check the time</h2>
		<select name="radio">
			<option value="Asia      colmbo">colmbo</option>
			<option value="Australia sydney">sydney</option>
			<option value="America   newyork">newyork</option>
			<option value="Asia      singapore">singapore</option>
		</select>
		<input type="submit" name="submit" value="Get time"><br>

	</form>
	<?php
		error_reporting(0);
		$ctime = $_POST['radio'];
		function timer($ctime){
			echo "Time of ".substr($ctime, 0, 10);
			ini_set("date.timezone", substr($ctime, 0, 10)."/".substr($ctime, 10));
			echo "<p>".date("g:iA").'</p><br>';
		}
		timer($ctime);
	?>
</body>
</html>