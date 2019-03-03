<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

// setup some static information
$toaddress = "feedback@example.com";
$subject = "Feedback from web site";
$mailcontent = "Customer name: " .str_replace("\r\n", "", filter_var($name)). "\n" .
                "Customer email: " .str_replace("\r\n", "", $email). "\n" .
                "Customer comments: " .str_replace("\r\n", "", $feedback). "\n";
$fromaddress = "From: webserver@example.com";

// invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
	<h1>Feedback submitted</h1>
	<p>Your feedback has been sent.</p>
</body>
</html>