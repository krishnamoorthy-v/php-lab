<!DOCTYPE html>
<html>
<head>
	<title>Country name</title>
</head>
<body>
	<h1>Country capital</h1>
	<?php
		$ceu = array('Delhi' => "India", "moscow" => "russia", "bejing" => "china", "new_york" => "usa", "London" => "UK", "paris" => 
		"france", "Tokyo" => "japan", 'beljium'=> "Germany" );
		asort($ceu);
		foreach ($ceu as $capital => $Country) {
			echo "The capital of $Country is $capital.";
			echo "<br>";

		}
	?>
</body>
</html>