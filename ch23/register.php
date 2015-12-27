<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 23:52
 */
$userid = $_REQUEST['userid'];
$password = sha1($_REQUEST['password']);

$db_conn = new mysqli('localhost', 'root', '', 'books');

if(mysqli_connect_errno()) {
	echo 'Connection to database failed: '.mysqli_connect_error();
	exit();
}

$query = 'insert into authorized_users values '."('$userid', '$password')";

$result = $db_conn->query($query);
if($result) {
	// if they are in the database register the user id
	$_SESSION['valid_user'] = $userid;
	echo $db_conn->affected_rows." user established";
} else {
	echo '<h2>Sign up failed...</h2>';
}
$db_conn->close();
echo '<h1>Sign up</h1>';
echo '<a href="authmain.php">Go to main page</a><br/>';
