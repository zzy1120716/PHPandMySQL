<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/29
 * Time: 17:50
 */
echo 'This is the main file.<br/>';
require('reusable.php');
echo 'The script will end now.<br/>';

//phpinfo();

function fn()
{
	//echo "inside the function, \$var = ".$var."<br/>";
	$var = "contents 2";
	echo "inside the function, \$var = " . $var . "<br/>";
}

$var = "contents 1";
fn();
echo "outside the function, \$var = " . $var . "<br/>";

function fn2()
{
	global $var;
	$var = "contents";
	echo "inside the function, \$var = " . $var . "<br/>";
}

fn2();
echo "outside the function, \$var = " . $var . "<br/>";
/*未改变原变量的引用*/
function increment1($value, $amount = 1)
{
	$value = $value + $amount;
}

echo "without '&': <br/>";
$a1 = 10;
echo $a1 . "<br/>";
increment1($a1);
echo $a1 . "<br/>";
/*引用传递参数*/
function increment2(&$value, $amount = 1)
{
	$value = $value + $amount;
}

echo "with '&': <br/>";
$a2 = 10;
echo $a2 . "<br/>";
increment2($a2);
echo $a2 . "<br/>";

