<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 22:41
 */
session_start();

echo 'The content of $_SESSION[\'sess_var\'] is ' . $_SESSION['sess_var'].'.<br/>';

session_destroy();

