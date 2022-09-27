<!DOCTYPE html>
<html>
<head>
	<title>chess board</title>
</head>
<body>
	<h3>chess board using nested for loop</h3>
	<table width="207px" border="2px">
	<?php
		for($row = 1; $row <=8; $row++)
		{
			echo "<tr>";
			for($col = 1; $col <= 8; $col++)
			{
				$total = $row + $col;
				if($total%2==0)
				{
					echo "<td height = 30px width = 45px bgcolor = white> </td>";
				}
				else
				{
					echo "<td height = 30px width = 45px bgcolor = black > </td>";
				}
				
			}
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>