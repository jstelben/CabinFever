<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
		<meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./HeaderFooterStyle.css">
    <script type="text/javascript" src="./jquery.js"></script>
    <style type="text/css">
      main{
        width: 100%;
      }

        main h2, h3{
          font-family: 'Khula', sans-serif;
        }

        .TitleBreak{
          text-align: center;
          width: 1000px;
          height: 90px;
          margin-left: auto;
          margin-right: auto;
          background-color: #555;
        }
          .InnerBreak{
            position: relative;
            text-align: center;
            width: 80%;
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

            .ResultColumnLeft{
              float: left;
              width: 375px;
              padding-left: 25px;
              padding-bottom: 50px;
            }

            .ResultColumnRight{
              float: right;
              width: 375px;
              padding: 5px 25px 0 25px;
            }

            .ResultColumnRight h3{

            }

            .ResultColumnRight p{
              margin-top: 5px;
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
          <img src="./Assets/CabinFeverLogo.png">
        </div>
        <div class="SloganWrap">
          <h1>CabinFever</h1>
          <h2>Let's Go Outside</h2>
        </div>
      </div>

      <div class="HeaderRight">
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
    </div>
  </header>

  <main>
          <?php
          
          	session_start();
          	$eventNum = $_GET['event'];
          	$_SESSION['currentEventNum'] = $eventNum;
            require('geteventlargeinfo.php');
          ?> 


      <div id="Conclusion">
        <h2><a href="./result.php">Back To Results</a></h2>
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
