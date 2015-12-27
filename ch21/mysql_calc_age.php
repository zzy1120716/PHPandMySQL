<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 16:12
 */
$day = 16;
$month = 10;
$year = 1992;

$bdayISO = date("c", mktime(0, 0, 0, $month, $day, $year));//转化为mysql支持的ISO格式

$db = mysqli_connect('localhost', 'root', '');
$res = mysqli_query($db, "select datediff(now(), '$bdayISO')");
$age = mysqli_fetch_array($res);

echo "Age is ".floor($age[0]/365.25).".";