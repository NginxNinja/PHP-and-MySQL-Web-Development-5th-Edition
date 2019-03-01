<!DOCTYPE html>
<html>
<head>
	<title>Goal per Day</title>
</head>
<body>
	<div align="center">
	<table style="width: 100%; border: 1">
		<?php
		$length = 687;
		for($count = 1; $count <= $length; $count++){
		    $percent = round($count/$length*100, 2);
		    echo "<tr style=\"border: 1\">";
		    echo "<td>Ends at page ".$count.". ". $percent."% completed.</td>";
		    echo "</tr>";
		}
		?>
	</table>
	</div>
</body>
</html>