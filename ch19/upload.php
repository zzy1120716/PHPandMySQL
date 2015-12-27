<html>
<head>
	<title>Uploading...</title>
</head>
<body>
<h1>Uploading file...</h1>
<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/13
 * Time: 9:49
 */
if($_FILES['userfile']['error'] > 0) {
	echo 'Problem:';
	switch ($_FILES['userfile']['error']) {
		case 1: echo 'File exceeded upload_max_filesize<br/>';
			break;
		case 2: echo 'File exceeded max_file_size<br/>';
			break;
		case 3: echo 'File only partially uploaded<br/>';
			break;
		case 4: echo 'No file uploaded<br/>';
			break;
		case 6: echo 'Cannot uploads file: No temp directory specified<br/>';
			break;
		case 7: echo 'Upload failed: Cannot write to disk<br/>';
			break;
	}
	exit;
}

// Does the file have the right MIME type?
if($_FILES['userfile']['type'] != 'text/plain') {
	echo 'Problem: file is not plain text';
}

// put the file where we'd like it
//$upfile = '/uploads/'.$_FILES['userfile']['name'];//linux 放在系统根目录下的uploads文件夹下
$upfile = 'C:/uploads/'.$_FILES['userfile']['name'];//windows 放在C盘uploads文件夹下

if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile)) {
		echo 'Problem: Could not move file to destination directory<br/>';
		exit;
	}
} else {
	echo 'Problem: Possible file upload attack. Filename:';
	echo $_FILES['userfile']['name'];
	exit;
}

echo 'File uploaded successfully<br><br>';

// remove possible HTML and PHP tags from the file's contents
$contents = file_get_contents($upfile);
$contents = strip_tags($contents);
file_put_contents($_FILES['userfile']['name'], $contents);

// show what was uploaded
echo '<p>Preview of uploaded file contents: </p><br/><hr/>';
echo nl2br($contents);
echo '<br/><hr/>';
?>
</body>
</html>


























