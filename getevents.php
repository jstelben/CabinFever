<?php
	session_start();
	$eventArray = array();
	for($i = 1; $i < 9; $i++)
	{
		$_SESSION['currentEventNum'] = $i;
		require('getevent.php');
		$eventArray[''.$i-1] = $_SESSION['currentEvent'];
	}
	$_SESSION['events'] = $eventArray;
?>