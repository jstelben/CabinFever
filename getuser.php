<?php
require('phpquery.php');
session_start();
$email = $_SESSION['email'];
$sql = "SELECT * FROM Users WHERE email = ".$email;
$sth = $link->query($sql);
$result = mysqli_fetch_array($sth);
$array = array(
	"physical" => $result['PHYSICAL'],
	"challenging" => $result['CHALLENGING'],
	"relaxing" => $result['RELAXING'],
	"food" => $result['FOOD'],
	"money" => $result['MONEY'],
	"historical" => $result['HISTORICAL'],
	"cultural" => $result['CULTURAL'],
	"outside" => $result['OUTSIDE'],
	"inside" => $result['INSIDE'],
	"physicalCount" => $result['PHYSICAL_COUNT'],
	"challengingCount" => $result['CHALLENGING_COUNT'],
	"relaxingCount" => $result['RELAXING_COUNT'],
	"foodCount" => $result['FOOD_COUNT'],
	"moneyCount" => $result['MONEY_COUNT'],
	"historicalCount" => $result['HISTORICAL_COUNT'],
	"culturalCount" => $result['CULTURAL_COUNT'],
	"outsideCount" => $result['OUTSIDE_COUNT'],
	"insideCount" => $result['INSIDE_COUNT']
);
$_SESSION['userAttr'] = $array;
require('closeconnection.php');
?>