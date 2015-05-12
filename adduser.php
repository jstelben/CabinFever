<?php
require("phpquery.php");
$newEmail = $_POST["newemail"];
$newPassword = $_POST["newpassword"];
if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid";
	exit();
}
$sql = "INSERT INTO Users SET EMAIL = '$newEmail', PASSWORD = '$newPassword'"; 
if(!mysqli_query($link, $sql))
{
	$error = 'Error inserting new user: ' . mysqli_error($link);
	echo "Error";
	exit();
}
session_start();
$_SESSION["email"] = $newEmail;
include("closeconnection.php");
echo "Success";
?>
