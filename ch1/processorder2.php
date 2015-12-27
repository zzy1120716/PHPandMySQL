<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        <?php
        ini_set('date.timezone', 'Asia/Shanghai');
        echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        define('TAXRATE', 0.10);

        // 计算表单总金额
        $totalqty = 0;

        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];

        $totalqty = $tireqty + $oilqty + $sparkqty;

        echo "Items ordered: ".$totalqty."<br/>";
        $totalamount = 0.00;

        $totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;

        echo "Subtotal: $".number_format($totalamount, 2)."<br/>";

        $totalamount = $totalamount * (1 + TAXRATE);

        echo "Total including tax: $".number_format($totalamount, 2)."<br/>";
        ?>
    </body>
</html>

