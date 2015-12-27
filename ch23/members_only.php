<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 23:29
 */
session_start();
echo "<h1>Member only</h1>";
//check session variable
if(isset($_SESSION['valid_user'])) {
	echo "<p>You are logged in as ".$_SESSION['valid_user']."</p>";
	echo "<p>Only logged in members may see this page.</p>";
} else {
	echo '<p>You are not logger in.</p>';
	echo '<p>Only logged in members may see this page.</p>';
}

echo '<a href="authmain.php">Back to main page</a>';