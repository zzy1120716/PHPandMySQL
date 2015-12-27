<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/23
 * Time: 22:19
 */
	// create short variable name
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php

	@ $fp = fopen("$DOCUMENT_ROOT/../PHP_DATA/orders.txt", 'rb');

	if(!$fp) {
		echo "<p><strong>No orders pending.
					Please try again later.</strong></p>";
		exit;
	}

	flock($fp, LOCK_SH);

	while (!feof($fp)) {
		$order = fgets($fp, 999);
		echo $order."<br/>";
	}

	flock($fp, LOCK_UN);
	fclose($fp);

?>

</body>
</html>
