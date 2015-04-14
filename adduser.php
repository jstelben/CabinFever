<?php
require("phpquery.php");
$newEmail = $_POST["newemail"];
$newPassword = $_POST["newpassword"];
$sql = "INSERT INTO Users SET EMAIL = '$newEmail', PASSWORD = '$newPassword'"; 
if(!mysqli_query($link, $sql))
{
	$error = 'Error inserting new user: ' . mysqli_error($link);
	die($error);
}
session_start();
$_SESSION["email"] = $newEmail;
?>
