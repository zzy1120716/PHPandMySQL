<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 16:04
 */
$day = 16;
$mon = 10;
$year = 1992;

$bdayunix = mktime(0, 0, 0, $mon, $day, $year);
$nowunix = time();
$ageunix = $nowunix - $bdayunix;
$age = floor($ageunix / (365*24*60*60));

echo "<h2>Your age is $age.</h2>";