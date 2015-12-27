<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/20
 * Time: 0:10
 */
echo "<h1>Eval函数</h1>";
eval("echo 'Hello World';");
echo "<br/>";

echo "<h1>列出PHP所有扩展部件</h1>";
echo "Function sets supported in this install are: <br/>";
/*$extensions = get_loaded_extensions();
foreach($extensions as $each_ext) {
	echo "$each_ext<br/>";
	echo "<ul>";
	$ext_funcs = get_extension_funcs($each_ext);
	foreach($ext_funcs as $func) {
		echo "<li>$func</li>";
	}
	echo "</ul>";
}*/

echo "<h1>识别脚本所有者</h1>";
echo get_current_user()."<br/>";

echo "<h1>确定脚本最近修改时间</h1>";
echo date('g:i a, j M Y', getlastmod());

echo "<h1>暂时改变运行时环境</h1>";
?>
<?php
$old_max_execution = ini_set('max_execution_time', 120);
echo "old timeout is $old_max_execution<br/>";

$max_execution_time = ini_get('max_execution_time');
echo "new timeout is $max_execution_time<br/>";
?>
