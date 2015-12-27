<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/29
 * Time: 10:59
 */

$total_shipping = 3;
$total = 12;
printf("The total price is $%.2f<br/>", $total);
printf("Total amount of order is %2\$.2f (with shipping %1\$.2f).<br/>", $total_shipping, $total);

$email = "zzy1120716@126.com";
$email_array = explode('@', $email);
var_dump($email_array);

echo implode($email_array)."<br/>";
echo implode('@', $email_array)."<br/>";

$feedback = "Hi, I'm Zhao Zhengyang, I feel really excited today! If you want to contact me, feel free to dial the telephone number...";

$token = strtok($feedback, " ");
echo $token."<br/>";
while($token != "") {
	$token = strtok(" ");
	echo $token."<br/>";
}

echo strstr("I still haven't received delivery of my last order.", 'delivery')."<br/>";
echo strpos("I still haven't received delivery of my last order.", 'delivery')."<br/>";
echo strpos("I still haven't received delivery of my last order.", 'delivery', 10)."<br/>";

$statement = "I still haven't received delivery of my last order.";
echo str_replace("I", "You", $statement)."<br/>";

$address = "username@example.com";
$arr = preg_split("/\.|@/", $address);
while(list($key, $value) = each($arr)) {
	echo "<br/>".$value;
}
