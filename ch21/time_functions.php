<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 15:32
 */
echo date('jS F Y')."<br/>";
//echo mktime()."<br/>";
echo time()."<br/>";
echo date("U")."<br/>";//与上一句等价
echo mktime(12, 0, 0)."<br/>";
echo mktime(0, 0, 0, 1, 1)."<br/>";//今年一月一日
$mon = 12;
$day = 1;
$year = 2020;
echo mktime(12, 0, 0, $mon, $day+30, $year)."<br/>";

$today = getdate();
print_r($today);

echo checkdate(2, 29, 2007)."<br/>";//false
echo checkdate(2, 29, 2008)."<br/>";//1

echo "<h1>格式化时间戳</h1>";
echo strftime('%A<br/>');//Saturday
echo strftime('%x<br/>');//12/19/15
echo strftime('%c<br/>');//12/19/15 15:48:49
echo strftime('%Y<br/>');//2015

echo number_format(microtime(true), 10, '.', '')."<br/>";