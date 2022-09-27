<!DOCTYPE html>
<html>
<head>
	<title>Calculate Temperature </title>
</head>
<body>
	<form method="post" action="calculatetemp.php">
		Enter the number of temperature
		<input type="text" name="name1">
		<input type="submit" name = "submit" value= "check"><br>
		<?php
			error_reporting(0);
			if(isset($_POST['submit']))
			{
				$nump = $_POST['name1'];
				settype($nump, 'int');
				#echo "the value of nump: $nump";
				echo "<form method = 'post'>";
				for ($i=1; $i <= $nump ; $i++) { 
					echo "Enter the temperature $i ";
					echo "<input type = 'text' name = 'name[]'>";
					echo "<br><br>";

				}
			}
			echo "<input type = 'submit' name = 'submit' value = 'submit'>";
			echo "</form>";
			if(isset($_POST['submit']))
			{
				$name = $_POST['name'];
				echo "<br><br>";
				echo "Record the temperature: ";
				foreach ($name as $num )
				{
					echo "$num, ";
				}
				asort($name);
				echo "<br><br>";
				echo "Average of temperature: ";
				echo number_format(array_sum($name)/count($name), 1);
				echo "<br><br>";
				echo "list of five lowest temperature: ";
				echo implode(",", array_slice($name, 0, 5));
				echo "<br><br>";
				echo "list of five highest temperature: ";
				echo implode(",", array_slice($name, -5, 5));
			}
		?> 
	</form>
</body>
</html>