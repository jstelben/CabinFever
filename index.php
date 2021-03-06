<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
		<meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <?php
    	session_start();
		if(isset($_SESSION['email']))
		{
			echo '<link rel="stylesheet" type="text/css" href="./Styles/LoggedInStatusHeaderFooterStyle.css">';
		}
		else
		{
			echo '<link rel="stylesheet" type="text/css" href="./Styles/DefaultHeaderFooterStyle.css">';
		}
    ?>

    <script type="text/javascript" src="./Assets/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready( function(){
        setupSlideShow();
      });
      function setupSlideShow(){
        $(".SlideShowWrap > img:gt(0)").hide();
        setInterval(function() {
          $('.SlideShowWrap > img:first')
            .fadeOut(1000)
            .next('img')
            .fadeIn(1000)
            .end()
            .appendTo('.SlideShowWrap');
        }, 3000);
      }
    </script>
    <style type="text/css">
      .UserAccessRow{
        padding-bottom: 10px;
        border-bottom: solid;
        border-width: 10px;
        border-color: #FFF;
        margin-top: 40px;
        margin-right: 50px;
        margin-left: 235px;
      }
        .UserAccessRow h3{
          text-align: right;
          font-size: 150%;
          color: #FFF;
        }
        .Register a:visited, a:link{
          color: #FFF;
          text-decoration: none;
        }
        .Register-Black a:visited, a:link{
          color: #000;
          text-decoration: none;
        }
        .Register, .Register-Black a:hover{
          color: #99BBFF;
          text-decoration: none;
        }
        .Register, .Register-Black a:active{
          color: #EE5500;
          text-decoration: none;
        }
      main{
        width: 100%;
      }
        .SlideShowWrap{
          position: relative;
          width: 1000px;
          height: 350px;
          padding-top: 25px;
          padding-bottom: 25px;
          margin-left: auto;
          margin-right: auto;
        }
          .SlideShowWrap img{
            position: absolute;
            padding-left: 175px;
            padding-right: 175px;
            background-color: #FFF;
          }
        .BreakWrap{
          text-align: center;
          width: 100%;
          height: 90px;
          background-color: #555;
        }
          .InnerBreak{
            position: relative;
            text-align: center;
            width:1150px;
            height: 50px;
            top:50%;
        		transform: translateY(-50%);
            border-radius: 25px;
            margin: auto;
            background-color: #FFF;
          }
            .InnerBreak h1{
              position: relative;
              top:50%;
          		transform: translateY(-50%);
            }
        .MainContentWrap{
          overflow: auto;
          overflow: hidden;
          width: 900px;
          max-height: 600px;
          padding-top: 25px;
          padding-bottom: 25px;
          padding-left: 50px;
          padding-right: 50px;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 25px;
          background-color: #FFF;
        }
          .ContentColumn{
            float: left;
            width: 300px;
            height: 600px;
          }
            .ContentBox{
              width: 250px;
              height: 250px;
              padding: 25px;
            }
              .ContentBox h3{
                font-size: 150%;
                padding-top: 2.5px;
                padding-bottom: 2.5px;
                border-top: solid;
                border-bottom: solid;
              }
              .ContentBox p{
                margin-top: 10px;
              }
      </style>

  </head>

  <body>
    <header>
      <div class="HeaderFloatWrap">
        <div class="HeaderLeft">
          <div class="LogoWrap">
            <img src="./Assets/CabinFeverLogo.png">
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
            <h2><a onclick="Javascript:killSession()">Log Out</a></h2>
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
      <div class="BreakWrap">
        <div class="InnerBreak">
          <h1>Welcome To Our Dynamic Solution To Boredom</h1>
        </div>
      </div>

      <div class="SlideShowWrap">
        <img src="./Assets/img1.jpg">
        <img src="./Assets/img2.jpg">
        <img src="./Assets/img3.jpg">
        <img src="./Assets/img4.jpg">
      </div>

      <div class="MainContentWrap">
        <div class="ContentColumn">
          <div class="ContentBox">
            <h3 style="margin-right: 157.5px">Join Up</h3>
            <p>Find people you never knew that have similar interests and hobbies
               as we can guide you to the communities you belong to.
               If you find yourself to be motivated to start a new following,
              you can start your own events and we can get the interested parties to you.</p>
          </div>
          <div class="ContentBox">
            <a href="registeruser.php"><img src="./Assets/Join.jpg"><a/>
          </div>
        </div>

        <div class="ContentColumn">
          <div class="ContentBox">
            <img src="./Assets/Ship.jpg">
          </div>
          <div class="ContentBox">
            <h3 style="margin-right: 147.5px">Discover</h3>
            <p>We can help you explore the many different pass-times and hobbies
              that exist out there. And with every feedback that you give us about your events,
              we can be more accurate to what you're really interested in.
              Then we can filter out the good ones just for your individual taste.</p>
          </div>
        </div>

        <div class="ContentColumn">
          <div class="ContentBox">
            <h3 style="margin-right: 162.5px">Expand</h3>
            <p>Our services might help bring new customers to your business,
              but only if you let us. Begin a collaboration to start a whole new
              burst of activity and spark new interest in the businesses you own.</p>
          </div>
          <div class="ContentBox">
            <img src="./Assets/Business.jpg">
          </div>
        </div>
      </div>

      <div class="BreakWrap">
        <div class="InnerBreak" style="width: 500px">
          <h1 class="Register-Black"><a href="registeruser.php">Let's Go Outside<a/></h1>
        </div>
      </div>
    </main>

    <footer>
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
	function killSession()
	{
		//if the php starts it activates on page load
		$temp = 0;
		<?php
			session_start();
			$destroyed = session_destroy();
		?>
		document.location.href = "index.php";
	}
</script>