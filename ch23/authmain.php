<?php
/**
 * Created by PhpStorm.
 * User: zzy
 * Date: 2015/12/19
 * Time: 23:00
 */
session_start();
if(isset($_POST['userid']) && isset($_POST['password'])) {
	//if the user has just tried to log in
	$userid = $_POST['userid'];
	$password = $_POST['password'];

	$db_conn = new mysqli('localhost', 'root', '', 'books');

	if(mysqli_connect_errno()) {
		echo 'Connection to database failed: '.mysqli_connect_error();
		exit();
	}

	$query = 'select * from authorized_users '."where name='$userid'"." and password = sha1('$password')";

	$result = $db_conn->query($query);
	if($result->num_rows) {
		// if they are in the database register the user id
		$_SESSION['valid_user'] = $userid;
	}
	$db_conn->close();
}
?>
<html>
<body>
<h1>Home Page</h1>
<?php
	if(isset($_SESSION['valid_user'])) {
		echo 'You are logged in as: '.$_SESSION['valid_user'].'<br/>';
		echo '<a href="logout.php">Log out</a><br/>';
	} else {
		if(isset($userid)) {
			//if they've tried and failed to log in
			echo 'Could not log you in.<br/>';
		} else {
			//they have not tried to log in yet or have logged out
			echo 'You are not logged in.<br/>';
		}

		//provide form to log in
		echo '<form method="post" action="authmain.php">';
		echo '<table>';
		echo '<tr><td>Userid: </td>';
		echo '<td><input type="text" name="userid"/></td></tr>';
		echo '<tr><td>Password: </td>';
		echo '<td><input type="password" name="password"/></td></tr>';
		echo '<tr><td colspan="2" align="center">';
		echo '<input type="submit" value="Log in"/></td></tr>';
		echo '</form>';
	}
?>
<br>
<a href="members_only.php">Members section</a><br>
</body>
</html>



























