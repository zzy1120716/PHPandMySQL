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
        /**
         * Created by PhpStorm.
         * User: zzy
         * Date: 2015/11/22
         * Time: 12:09
         */
        ini_set('date.timezone', 'Asia/Shanghai');
        // create short variable names:
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];
        /*
            This is a multi-line comment!
            Text here will not be interpreted by interpreter.
        */
        // Single-line comment
        # Another way to write a comment

        echo "<h2>定义常量</h2>";
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        echo "轮胎的单价为: ".TIREPRICE;
        echo "预定义的变量&常量";
        //phpinfo();

        echo '<p>Order processed.</p>';
        echo "<p>Order processed at";
        echo date('H:i, jS F Y');
        echo "</p>";
        //使用.连接符：
        echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
        // show user's input
        echo '<p>Your order is as follows: </p>';
        echo $tireqty. ' tires<br/>';
        echo $oilqty. ' bottles of oil<br/>';
        echo $sparkqty. ' spark plugs<br/>';
        // also
        echo "<p>另一种字符串拼接变量的方法(双引号)</p>";
        echo "$tireqty tires<br/>";
        echo "$oilqty bottles of oil<br/>";
        echo "$sparkqty spark plugs<br/>";
        echo "<p>Perl风格的长字符串写法：</p>";
        /*$str = <<<theEnd
            line 1
            line 2
            line 3
        theEnd;
        echo $str;*/
        echo "<p>可变变量</p>";
        $count = 10;
        echo '$count的值为:'.$count.'<br/>';
        $varname = 'count';
        $$varname = 15;
        echo '$count的值为:'.$count.'<br/>';

        class sampleClass{};
        $myObject = new sampleClass();
        if($myObject instanceof sampleClass)
            echo "myObject is an instance of sampleClass ";
        ?>
    </body>
</html>

