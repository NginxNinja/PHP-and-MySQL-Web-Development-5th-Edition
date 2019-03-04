<!DOCTYPE html>
<html>
<head>
	<title>Completion Per Day</title>
</head>
<body>
	<div align="left">
	<table>
		<?php
		$length = 687;
		for($count = 1; $count <= $length; $count++){
//		    $percent = round($count/$length*100, 2);
		    echo "<tr>";
		    /** ##This echo statement is using the $percent variable calculation.
		    echo "<td style=\"border: 1px solid black;\">Ends at page ".$count.". ". $percent."% completed.</td>";
		    **/
		    // This is the same output as the echo statement above.
		    printf("<td style=\"border: 1px solid black;\">Ends at page %d. %.2f%% completed.</td>", $count, $count/$length*100);
		    echo "</tr>";
		}
		?>
	</table>
	</div>
</body>
</html>