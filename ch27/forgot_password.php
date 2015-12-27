<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/21
 * Time: 23:21
 * 忘记密码操作
 * TODO functions to implement:
 * reset_password(location: user_auth_fns.php)
 * notify_password
 */
require_once('bookmark_fns.php');
do_html_header('Resetting password');

//creating short variable name
$username = $_POST['username'];

try {

	$password = reset_password($username);
	notify_password($username, $password);
	echo 'Your new password has been emailed to you.<br/>';

} catch(Exception $e) {
	echo 'Your password could not be reset - please try again later.';
}

do_html_URL('login.php', 'Login');
do_html_footer();