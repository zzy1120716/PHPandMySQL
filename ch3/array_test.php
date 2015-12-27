<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/23
 * Time: 23:35
 */
$products = array('Tires', 'Oil', 'Spark Plugs');
$numbers = range(1, 10);
$odds = range(1, 10, 2);
$letters = range('a', 'z');
$products[3] = 'Fuses';
for($i = 0; $i < 4; $i++) {
	echo $products[$i]." <br/>";
}
foreach ($odds as $current) {
	echo $current." <br/>";
}

$prices = array('Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4);

//注意：每次使用each()后都要进行reset
/*foreach打印数组*/
foreach ($prices as $key => $value) {
	echo $key." - ".$value."<br/>";
}
/*while打印数组*/
reset($prices);
while($element = each($prices)) {
	echo $element['key'];
	echo "——";
	echo $element['value'];
	echo "<br/>";
}
/*list()将数组分开*/
reset($prices);
while(list($product, $price) = each($prices)) {

	echo "$product - $price<br/>";

}

/*array_walk函数*/
reset($prices);
function my_multiply(&$value, $key, $factor) {
	$value *= $factor;
}
array_walk($prices, 'my_multiply', 3);
foreach ($prices as $key => $value) {
	echo $key." - ".$value."<br/>";
}