<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/23
 * Time: 20:59
 */
ini_set('date.timezone', 'Asia/Shanghai');
// create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$address = $_POST['address'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];  //D:/PhpstormProjects/test
$date = date('H:i, jS F Y');
?>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Bob's Auto Parts - Orders Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php

  echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

  echo "<p>Your order is as follows: </p>";

  $totalqty = 0;

  $totalqty = $tireqty + $oilqty + $sparkqty;
  echo "Items ordered: ".$totalqty."<br/>";

  if($totalqty == 0) {
    echo "You did not order anything on the previous page!<br/>";
  } else {
    if($tireqty > 0) {
      echo $tireqty." tires<br/>";
    }
    if($oilqty > 0) {
      echo $oilqty." bottles of oil<br/>";
    }
    if($sparkqty > 0) {
      echo $sparkqty." spark plugs<br/>";
    }
  }

  $totalamount = 0.00;

  define('TIREPRICE', 100);
  define('OILPRICE', 10);
  define('SPARKPRICE', 4);

  $totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;

  echo "<p>Total of order is $".$totalamount."</p>";
  echo "<p>Address to ship to is ".$address."</p>";

  $outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
                  .$sparkqty." spark plugs\t\$".$totalamount."\t".$address."\n";
  // open file for appending
  // 抑制错误使用@
  //@ $fp = fopen("$DOCUMENT_ROOT/../PHP_DATA/orders.txt", 'w');
  @ $fp = fopen("$DOCUMENT_ROOT/../PHP_DATA/orders.txt", 'a+');

  flock($fp, LOCK_EX);

  if(!$fp) {
    echo "<p><strong>Your order could not be processed at this time!"
         ."Please try again later.</strong></p></body></html>";
    exit;
  }

  fwrite($fp, $outputstring, strlen($outputstring));
  flock($fp, LOCK_UN);
  fclose($fp);

  echo "<p>Order written.</p>";

?>
<a href="vieworders.php">Show the orders</a>
</body>
</html>
