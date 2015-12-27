<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/21
 * Time: 22:38
 * 在浏览器输出修改密码表单
 */
require_once('bookmark_fns.php');
session_start();
do_html_header('Change password');
check_valid_user();

display_password_form();

display_user_menu();
do_html_footer();