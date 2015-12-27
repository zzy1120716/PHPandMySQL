<html>
<head>
	<title>Browse Directories</title>
</head>
<body>
<h1>Browsing</h1>
<?php
	//$current_dir = '/uploads/';
	$current_dir = 'C:/uploads/';
	$dir = opendir($current_dir);  //打开指定目录

	echo "<p>Upload directory is $current_dir</p>";
	echo '<p>Directory Listing: </p><ul>';
	while(false !== ($file = readdir($dir))) {  //读取指定目录中的文件
		//strip out the two entries of . and ..
		if($file != "." && $file != "..") {
			echo "<li>$file</li>";
		}
	}
	echo '</ul>';
	closedir($dir);  //关闭目录
?>
</body>
</html>