<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 22:41
 */
session_start();

$_SESSION['sess_var'] = "Hello World";
echo 'The content of $_SESSION[\'sess_var\'] is ' . $_SESSION['sess_var'].'.<br/>';
?>
<a href="page2.php">Next page >></a>
