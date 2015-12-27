<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/21
 * Time: 22:10
 * 数据库连接操作
 */
function db_connect() {
	$result = new mysqli('localhost', 'root', '', 'bookmarks');
	if(!$result) {
		throw new Exception('Could not connect to database server');
	} else {
		return $result;
	}
}