<?php
require("phpquery.php");
session_start();
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];
$question8 = $_POST['question8'];
/*
 * do algorithm and storage here
$sql = "INSERT INTO Users SET EMAIL = '$newEmail', PASSWORD = '$newPassword' WHERE EMAIL = ".$_SESSION['email']; 
if(!mysqli_query($link, $sql))
{
	$error = 'Error inserting new user: ' . mysqli_error($link);
	die($error);
	echo "Error";
}*/
include("closeconnection.php");
echo "Success";
?>