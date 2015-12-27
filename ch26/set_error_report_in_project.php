<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/20
 * Time: 21:35
 */
//turn off error reporting
$old_level = error_reporting(0);
//here, put code that will generate warnings
//turn error reporting back on
error_reporting($old_level);

//trigger an error
trigger_error("This computer will self destruct in 15 seconds", E_USER_WARNING);