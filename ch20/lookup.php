<html>
<head>
	<title>Stock Quote From NASDAQ</title>
</head>
<body>
<?php
//choose stock to look at
$symbol = 'AMZN';
echo '<h1>Stock quote for '.$symbol.'</h1>';
$url = 'http://finace.yahoo.com/d/quotes.csv?s=AMZN&e=.csv&f=sl1d1t1c1ohgv';
if(!($contents = file_get_contents($url))) {
	die('Failure to open ' . $url);
}
//extract relevant data
list($symbol, $quote, $date, $time) = explode(',', $contents);
$date = trim($date, '"');
$time = trim($time, '"');
echo '<p>' . $symbol . ' was last sold at: ' . $quote . '</p>';
echo '<p>Quote current as of ' . $date . ' at ' . $time . '</p>';
?>
</body>
</html>