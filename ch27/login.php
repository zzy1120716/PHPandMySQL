<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/21
 * Time: 20:10
 * 用户登录
 * TODO require page:
 * bookmark_fns.php
 * TODO functions to implement:
 * do_html_header/display_site_info/display_login_form/do_html_footer
 */
require_once("bookmark_fns.php");
do_html_header('');

display_site_info();
display_login_form();

do_html_footer();
