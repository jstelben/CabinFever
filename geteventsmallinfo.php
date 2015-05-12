<?php
require("phpquery.php");
session_start();
$eventNum = $_SESSION['currentEventNum'];
$sql = "SELECT * FROM Events WHERE id = $eventNum";
$sth = $link->query($sql);
$result = mysqli_fetch_array($sth);
echo '
<a onclick="Javascript:goToEventInfo('.$eventNum.')" style="cursor: pointer;">
	<img src="data:image/jpeg;base64,'.base64_encode($result['SMALL_IMAGE']).'"/>
	<h3>'.$result['NAME'].'</h3>
	<p>'.$result['SHORT_DESC'].'</p>
</a>
';
require('closeconnection.php');
?>