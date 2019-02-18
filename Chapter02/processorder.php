<?php
// constant variables
define("TIREPRICE", 100);
define("OILPRICE", 10);
define("SPARKPRICE", 4);

//create short variable names
# This variables are converted into Integer from String of $_POST[] array.
$tireqty = (int)($_POST['tireqty']);
$oilqty = (int)($_POST['oilqty']);
$sparkqty = (int)($_POST['sparkqty']);
$find = $_POST['find'];
$address = $_POST['address'];

?>

<!DOCTYPE html>
<html>
    <head>
    	<title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
    	<h1>Bob's Auto Parts</h1>
    	<?php
       	$totalqty = 0;
    	$totalqty = $tireqty + $oilqty + $sparkqty;
    	
    	if($totalqty == 0){
    	    echo '<p style = "color: red;">';
    	    echo 'You did not order anything from the previous page! </p>';
    	    exit;
    	}
    	else {
    	echo '<h2>Order Results</h2>';
    	echo '<p>Order processed at ' . date('H:i, jS F Y') . "</p>";
    	
    	echo '<p style="font-weight: bold;">';
    	switch ($find) {
    	    case "a":
                echo "Regular customer.";
                break;
    	    case "b":
    	        echo "Customer reffered by TV advertisement.";
    	        break;
    	    case "c":
    	        echo "Customer reffered by phone directory.";
    	        break;
    	    case "d":
    	        echo "Customer reffered by word of mouth.";
    	        break;
    	    default:
                echo "We do not know how this customer found us.";
    	    break;
    	}
    	echo '</p>';
    	
    	echo '<p>Your order is as follows: </p>';
    	
        echo '<strong><u>Calling the variable assignment</u></strong><br/>';
    	echo htmlspecialchars($tireqty) . ' tires. <br/>';
    	echo htmlspecialchars($oilqty) . ' bottles of oil. <br/>';
    	echo htmlspecialchars($sparkqty) . ' spark plugs. <br/>';
    	
    	$totalqty = $tireqty + $oilqty + $sparkqty;
    	echo "<p>";
    	echo "Items ordered: $totalqty. <br/>";

    	$totalamount = $tireqty * TIREPRICE +
    	               $oilqty * OILPRICE +
    	               $sparkqty * SPARKPRICE;
    	               
    	echo "Subtotal: $" .number_format($totalamount, 2). "<br/>";
    	
    	$taxrate = 0.10; // local sales tax is 10%
    	$totalamount = $totalamount * (1 + $taxrate);
    	echo "Total including tax:  $" .number_format($totalamount, 2). ".<br/>";
    	
    	echo "</p>";
    	
    	echo "Address to ship to is ".$address.".";
    	?>
    </body>
</html>