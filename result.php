<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
		<meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./Styles/LoggedInStatusHeaderFooterStyle.css">
    <script type="text/javascript" src="./Assets/jquery.js"></script>
    <style type="text/css">
      main{
        width: 100%;
      }
        main h2, h3{
          font-family: 'Khula', sans-serif;
        }

        #Title{
          margin-bottom: 25px;
          text-align: center;
        }

        .MainWrap{
          position: relative;
          width: 900px;
          padding: 50px;
          margin-left: auto;
          margin-right: auto;
          background-color: #FFF;
        }

          .MainColumnWrap{
            overflow: auto;
            overflow: hidden;
          }

            .ResultColumn{
              float: left;
              width: 300px;
              margin: 1em 0 1em 0;
              text-align: center;
            }

              .ResultColumn img{
                margin: 0 50px 0 50px;
              }

        #Conclusion{
          margin-top: 25px;
          text-align: center;
        }

    </style>
<body>
  <header>
    <div class="HeaderFloatWrap">
      <div class="HeaderLeft">
        <div class="LogoWrap">
          <img src="./Assets/CabinFeverLogoSmaller.png">
        </div>
        <div class="SloganWrap">
          <h1>CabinFever</h1>
          <h2>Let's Go Outside</h2>
        </div>
      </div>

      <div class="HeaderRight">
        <div class="UpperRightFloatWrap">
          <div class="NameDisplay">
            <h2>User Name Goes Here</h2>
          </div>
          <div class="SocialMediaRow">
            <img src="./Assets/SocialMediaIcon-FB.png" class="SocialMediaIcon">
            <img src="./Assets/SocialMediaIcon-GP.png" class="SocialMediaIcon">
            <img src="./Assets/SocialMediaIcon-LI.png" class="SocialMediaIcon">
            <img src="./Assets/SocialMediaIcon-P.png" class="SocialMediaIcon">
            <img src="./Assets/SocialMediaIcon-RSS.png" class="SocialMediaIcon">
            <img src="./Assets/SocialMediaIcon-TW.png" class="SocialMediaIcon">
            <img src="./Assets/SocialMediaIcon-YT.png" class="SocialMediaIcon">
          </div>
        </div>
      <div class="UserInterfaceTabs">
        <div class="UITab">
          <h2><a href="">Log Out</a></h2>
        </div>
        <div class="UITab">
          <h2><a href="">Settings</a></h2>
        </div>
        <div class="UITab">
          <h2><a href="">My Cabin</a></h2>
        </div>
        <div class="strong-tab">
          <h2><a href="">Go Outside</a></h2>
      </div>
    </div>
    <div class="UserAccessRow">
      <h3>Sign In</h3>
      <h3 class="Register"><a href="registeruser.php">Register<a/></h3>
    </div>
  </div>

  <div class="AccentColorBox" style="float: left">
  </div>
  </header>

  <main>
    <div class="MainWrap">
      <div id="Title">
        <h2>The results of your quiz has resulted in the following event:</h2>
      </div>
      <div class='MainColumnWrap'>
        <div class='ResultColumn'>
	  <?php
	  	session_start();
		if(!isset($_SESSION['rand1']))
		{
			$_SESSION['rand1'] = 0;
			$_SESSION['rand1'] = rand(1, 8);
		}
	  	if(!isset($_SESSION['rand2']))
	  	{
	  		$_SESSION['rand2'] = 0;
	  		$_SESSION['rand2'] = rand(1, 8);
			while($_SESSION['rand1'] == $_SESSION['rand2'])
			{
				$_SESSION['rand2'] = rand(1, 8);
			}
	  	}
	  	if(!isset($_SESSION['rand3']))
		{
			$_SESSION['rand3'] = 0;
			$_SESSION['rand3'] = rand(1, 8);
			while($_SESSION['rand1'] == $_SESSION['rand3'] || $_SESSION['rand2'] == $_SESSION['rand3'])
			{
				$_SESSION['rand3'] = rand(1, 8);
			}
		}
		$_SESSION['currentEventNum'] = $_SESSION['rand1'];
		require('geteventsmallinfo.php');
	  ?>
	  </div>
        <div class="ResultColumn">
          <?php
          	session_start();
          	$_SESSION['currentEventNum'] = $_SESSION['rand2'];
          	require('geteventsmallinfo.php');
	  ?>
        </div>
        <div class="ResultColumn">
        <?php
          session_start();
          $_SESSION['currentEventNum'] = $_SESSION['rand3'];
          require('geteventsmallinfo.php');
	  ?>
        </div>
      </div>

      <div id="Conclusion">
        <!--- DONT FORGET TO CHANGE THIS LINK TO .PHP ****************************************** -->
        <h2><a href="index.php">Reset User Testing</a></h2>
      </div>
    </div>
  </main>


  <footer>
    <div class="FooterAccentColorBox">
    </div>

    <div class="FooterFloatWrap">
      <div class="FooterColumn AboutColumn">
        <h2>About</h2>
      </div>
      <div class="FooterColumn ExtraColumn">
        <h2>Additional</h2>
      </div>
      <div class="FooterColumn ContactColumn">
        <h2>Contact</h2>
      </div>
    </div>
  </footer>
</body>
</html>

<script>
	function goToEventInfo(event){
		switch(event)
		{
			case 1:
			{
				document.location.href = "eventInfo.php?event=1";
				break;
			}
			case 2:
			{
				document.location.href = "eventInfo.php?event=2";
				break;
			}
			case 3:
			{
				document.location.href = "eventInfo.php?event=3";
				break;
			}
			case 4:
			{
				document.location.href = "eventInfo.php?event=4";
				break;
			}
			case 5:
			{
				document.location.href = "eventInfo.php?event=5";
				break;
			}
			case 6:
			{
				document.location.href = "eventInfo.php?event=6";
				break;
			}
			case 7:
			{
				document.location.href = "eventInfo.php?event=7";
				break;
			}
			case 8:
			{
				document.location.href = "eventInfo.php?event=8";
				break;
			}
		}
	};
	function killSession()
	{
		<?php
			session_start();
			$destroyed = session_destroy();
		?>
		document.location.href = "index.php";
	}
</script>
