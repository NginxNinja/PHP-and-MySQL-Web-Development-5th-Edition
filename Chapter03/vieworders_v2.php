<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts</title>
	<style type="text/css">
	table, th, td{
    	border-collapse: collapse;
    	border: 1px solid black;
    	padding: 6px;
	}
	
	th{
	   background: #ccccff;
	}
	</style>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	
	<?php 
	$orders = file("C:\\xampp\\htdocs\\phpandmysql\\Chapter02\\orders\\orders.txt");
	
	$number_of_orders = count($orders);
	if($number_of_orders == 0){
	    echo '<p><strong>No orders pending.<br />
                        Please try again later.</strong></p>';
	    exit();
	}
	
	echo "<table>\n";
	echo "<tr>
            <th>Order Date</th>
            <th>Tires</th>
            <th>Oil</th>
            <th>Spark Plugs</th>
            <th>Total</th>
            <th>Address</th>
        <tr>";
	
	for($count = 0; $count < $number_of_orders; $count++){
	    $line = explode("\t", $orders[$count]); // split up each line
	    
	    // keep only the number of items ordered
	    $line[1] = intval($line[1]);
	    $line[2] = intval($line[2]);
	    $line[3] = intval($line[3]);
	    
	    // output each order
	    echo "<tr>
        <td>".$line[0]."</td>
	    <td style = \"text-align: right\">".$line[1]."</td>
        <td style = \"text-align: right\">".$line[2]."</td>
        <td style = \"text-align: right\">".$line[3]."</td>
        <td style = \"text-align: right\">".$line[4]."</td>
        <td>".$line[5]."</td>
</tr>";
	}
	
	echo "</table>";
	
	?>
</body>
</html>