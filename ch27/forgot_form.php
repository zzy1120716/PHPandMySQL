<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/21
 * Time: 23:20
 * 输出忘记密码表单
 */
require_once('bookmark_fns.php');
do_html_header('Reset password');

display_forgot_form();

do_html_footer();