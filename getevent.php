<?php
require('phpquery.php');
session_start();
$eventNum = $_SESSION['currentEventNum'];
$sql = "SELECT * FROM Events WHERE id = ".$eventNum;
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
	"inside" => $result['INSIDE']
);
$_SESSION['currentEvent'] = $array;
require('closeconnection.php');
?>