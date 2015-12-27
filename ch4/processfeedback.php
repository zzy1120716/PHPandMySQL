<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/25
 * Time: 21:52
 */
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

$toaddress = "feedback@example.com";

$subject = "Feedback from web site";

$mailcontent = "Customer name: ".$name."\n".
							 "Customer email: ".$email."\n".
							 "Customer comments: ".$feedback."\n";

$fromaddress = "From: webserver@example.com";

mail($toaddress, $subject, $mailcontent, $fromaddress);

?>

<html>
	<head>
		<title>Bob's Auto Parts - Feedback Submitted</title>
	</head>
	<body>
		<h1>Feedback submitted</h1>
		<p>Your feedback has been sent.</p>
	</body>
</html>