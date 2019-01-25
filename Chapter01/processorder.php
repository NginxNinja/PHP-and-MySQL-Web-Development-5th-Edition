<?php
// constant variables
define("TIREPRICE", 100);
define("OILPRICE", 10);
define("SPARKPRICE", 4);

//create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
?>

<!DOCTYPE html>
<html>
    <head>
    	<title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
    	<h1>Bob's Auto Parts</h1>
    	<h2>Order Results</h2>
    	<?php
    	echo '<p>Order processed at ' . date('H:i, jS F Y') . "</p>";
    	
    	echo '<p>Your order is as follows: </p>';
    	# (shell script comment) This is the same output as the variable assignment.
    	echo '<strong><u>Calling the $_POST[] array</u></strong><br/>';
    	echo htmlspecialchars($_POST['tireqty']) . ' tires. <br/>';
    	echo htmlspecialchars($_POST['oilqty']) . ' bottles of oil. <br/>';
    	echo htmlspecialchars($_POST['sparkqty']) . ' spark plugs. <br/>';
        echo "<p> </p>";
    	
        echo '<strong><u>Calling the variable assignment</u></strong><br/>';
    	echo htmlspecialchars($tireqty) . ' tires. <br/>';
    	echo htmlspecialchars($oilqty) . ' bottles of oil. <br/>';
    	echo htmlspecialchars($sparkqty) . ' spark plugs. <br/>';
    	
    	$totalqty = $tireqty + $oilqty + $sparkqty;
    	echo "<p>";
    	echo "Items ordered: $totalqty. <br/>";

//    	$totalamount = 0.00;
    	$totalamount = $tireqty * TIREPRICE +
    	               $oilqty * OILPRICE +
    	               $sparkqty * SPARKPRICE;
    	               
    	echo "Subtotal: $" .number_format($totalamount, 2). "<br/>";
    	
    	$taxrate = 0.10; // local sales tax is 10%
    	$totalamount = $totalamount * (1 + $taxrate);
    	echo "Total including tax:  $" .number_format($totalamount, 2). ".<br/>";
    	
    	echo "</p>";
    	
    	# (shell script comment) Heredoc sysntax
    	echo <<<theString
    	<br/> This is
        a sample heredoc string.
        The End.
theString
    	?>
    </body>
</html>