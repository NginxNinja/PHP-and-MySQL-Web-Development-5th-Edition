<!DOCTYPE html>
<html>
<head>
	<title>Goal Per Day</title>
</head>
<body>
	<div align="left">
	<table>
		<?php
		$length = 687;
		for($count = 1; $count <= $length; $count++){
		    $percent = round($count/$length*100, 2);
		    echo "<tr>";
		    echo "<td style=\"border: 1px solid black;\">Ends at page ".$count.". ". $percent."% completed.</td>";
		    echo "</tr>";
		}
		?>
	</table>
	</div>
</body>
</html>