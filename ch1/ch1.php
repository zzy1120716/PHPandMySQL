<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/11/22
 * Time: 22:38
 */
$a = 56;
echo gettype($a).'<br/>';
settype($a, 'double');
echo gettype($a).'<br/>';

$tireqty = 100;
echo 'isset($tireqty): '.isset($tireqty).'<br/>';
echo 'isset($nothere): '.isset($nothere).'<br/>';
echo 'empty($tireqty): '.empty($tireqty).'<br/>';
echo 'empty($nothere): '.empty($nothere).'<br/>';
echo 'after unset: <br/>';
unset($tireqty);
echo 'isset($tireqty): '.isset($tireqty).'<br/>';
echo 'empty($tireqty): '.empty($tireqty).'<br/>';

$tireqty = 200;
$colorval = 'CFA';
echo intval($colorval, 16).'<br/>';//将字符串基数设为十六进制，转为十进制整数
echo floatval($tireqty).'<br/>';
echo strval($tireqty).'<br/>';

if($tireqty == 0) :
    echo "You did'nt order any tire on the previous page!<br/>";
    exit;
endif;
