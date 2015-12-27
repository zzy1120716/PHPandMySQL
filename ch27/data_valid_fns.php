<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/21
 * Time: 21:14
 * 数据有效性验证
 */
//表单变量是否完全填写
function filled_out($form_vars) {
	//PHPandMySQL that each variable has a value
	foreach($form_vars as $key => $value) {
		if((!isset($key)) || ($value == '')) {
			return false;
		}
	}
	return true;
}

//邮件地址是否有效
function valid_email($address) {
	//check an email address is possibly valid
	if(preg_match('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $address)) {
		return true;
	} else {
		return false;
	}
}