<!DOCTYPE html>
<html>
<head>
	<title>Check lowercase</title>
</head>
<body>
	<h1>Checking for lowercase</h1>
	<form method="post" action = "lowercase.php">
		<input type="text" name="name">
		<input type="submit" name="submit" value = "check"><br>
		<?php
			if(isset($_POST['submit']))
			{
				$str = ($_POST['name']);
				if(check($str))
				{
					echo "The given string $str is in lowercase";
				}
				else
				{
					echo "The given string $str is not in lowercase";
				}
			}
			function check($str1)
			{
				for($sc=0; $sc<=strlen($str1); $sc++)
				{
					if(ord($str1[$sc])>=ord('A')&&ord($str1[$sc])<=ord('Z'))
					{
						return false;
					}
					return true;
				}
			}
		?>
</body>
</html>