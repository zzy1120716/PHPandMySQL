<html>
<head>
  <title>Book-O-Rama Search Results</title>
</head>
<body>
<h1>Book-O-Rama Search Results</h1>
<?php
// create short variable names
$isbn = $_POST['isbn'];
$author = $_POST['author'];
$title = $_POST['title'];
$price = $_POST['price'];

if(!$isbn || !$author || !$title || !$price) {
	echo "You have not entered all the required details.<br/>Please go back and try again!";
	exit;
}

if(!get_magic_quotes_gpc()) {
	$isbn = addslashes($isbn);
	$author = addslashes($author);
	$title = addslashes($title);
	$price = doubleval($price);
}

@ $db = new mysqli("localhost", "root", "", "books");

if(mysqli_connect_errno()) {
	echo "Error: Could not connect to database. Please try again later.<br/>";
	exit;
}

/*$query = "insert into books values ('".$isbn."', '".$author."', '".$title."', '".$price."')";
$result = $db->query($query);

if($result) {
	echo $db->affected_rows."book inserted into database.";
} else {
	echo "An error has occurred. The item was not added.";
}

$db->close();*/

/****************使用Prepared语句集中插入数据********************/
$query = "insert into books values(?, ?, ?, ?)";
$stmt = $db->prepare($query);
$stmt->bind_param("sssd", $isbn, $author, $title, $price);
$stmt->execute();
echo $stmt->affected_rows.' book inserted into database.<br/>';
$stmt->close();

?>
</body>
</html>
