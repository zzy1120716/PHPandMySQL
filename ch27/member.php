<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/21
 * Time: 22:12
 * 登录后显示的页面，是应用的主体
 * TODO functions to implement:
 * login(location: user_auth_fns.php)
 * check_valid_user/get_user_urls
 */
//include function files for this application
require_once("bookmark_fns.php");
session_start();

//create short variable names
$username = $_POST['username'];
$password = $_POST['password'];

if($username && $password) {
	//they have tried logging in(用户尝试登录)
	try {

		login($username, $password);
		//if they aer in the database register the user id
		$_SESSION['valid_user'] = $username;

	} catch(Exception $e) {

		//unsuccessful login
		do_html_header('Problem');
		echo 'You could not be logged in. You must be logged in to view this page.';
		do_html_URL('login.php', 'Login');
		do_html_footer();
		exit;

	}
}

do_html_header('Home');
check_valid_user();
//get the bookmarks this user has saved
if($url_array = get_user_urls($_SESSION['valid_user'])) {
	display_user_urls($url_array);
}

//give menu of options
display_user_menu();

do_html_footer();

























