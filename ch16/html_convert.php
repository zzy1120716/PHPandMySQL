<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/7
 * Time: 22:53
 */
$input_str = "<p align=\"center\">The user gave us \"15000?\". </p><script type=\"text/javascript\">// malicious JavaScript code goes here.</script><br/>";

$str1 = htmlspecialchars($input_str, ENT_NOQUOTES, "UTF-8");
echo nl2br($str1)."<br/>";
$str2 = htmlspecialchars($input_str, ENT_QUOTES, "UTF-8");
echo nl2br($str2)."<br/>";

$str3 = htmlentities($input_str, ENT_NOQUOTES, "UTF-8");
echo nl2br($str3)."<br/>";
$str4 = htmlentities($input_str, ENT_QUOTES, "UTF-8");
echo nl2br($str4)."<br/>";