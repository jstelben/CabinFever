<?php
require("phpquery.php");
session_start();
$eventNum = $_SESSION['currentEventNum'];
$sql = "SELECT * FROM Events WHERE id = $eventNum";
$sth = $link->query($sql);
$result = mysqli_fetch_array($sth);
echo '
				    <div class="TitleBreak">
				      <div class="InnerBreak">
				        <h1>'.$result['NAME'].'</h1>
				      </div>
				    </div>
				
				    <div class="MainWrap">
				      <div class="MainColumnWrap">
				        <div class="ResultColumnLeft">;
				          <img src="data:image/jpeg;base64,'.base64_encode($result['LARGE_IMAGE']).'"/>
				          <div class="control">
			                    <button type="go" class="control-button">I'm Going!</button>
			                  </div>
				        </div>
				        <div class="ResultColumnRight">
				          <h3>Date: '.$result['DATE'].'</h3>
				          <h3>Time: '.$result['TIME'].'</h3>
				          <h3>Location: '.$result['LOCATION'].'</h3>
				          <p>'.$result['LONG_DESC'].'</p>
				        </div>
				      </div>
				      ';
require('closeconnection.php');
?>
