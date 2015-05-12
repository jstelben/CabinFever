<?php
define('DB_SERVER', 'mysql-cabinfever.cnhahfkidjqh.us-west-2.rds.amazonaws.com');
define('DB_USERNAME', 'cabinfever');
define('DB_PASSWORD', 'cabinfever');
define('DB_DATABASE', 'CabinFever');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if(!$link)
{
	die("Could not connect to server.");
}
if(!mysqli_set_charset($link, 'utf8'))
{
	die("Could not set charset.");
}

if(!mysqli_select_db($link, DB_DATABASE))
{
	die("Could not connect to Database.");
}
/*
if(isset($_GET['adduser']))
{
	echo "Adding user";
	$newEmail = "new email";
	$newPassword = "new password";
	include 'form.html.php';
	echo "done with user";
}

$result = mysqli_query($link, 'SELECT Email  FROM Users');
if(!$result)
{
	$error = 'Error fetching SELECT query: ' . mysqli_error($link);
	die($error);
}

while($row = mysqli_fetch_array($result))
{
	$users[] = $row['Email'];
}

include 'user.html.php';
*/
//echo "All connected!!!";

?>