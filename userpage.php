<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
		<meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./Styles/LoggedInStatusHeaderFooterStyle.css">
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
      .control ul{
        list-style-type: none;
      }
        .control-button{
          touch-action: none;
          padding: 8px 16px 8px 16px;
          border-radius: 2px;
          margin: 1.5em 0 0 6em;
          cursor: pointer;
          background-color: #99BBFF;
          color: #FFF;
          text-align: center;
          text-decoration: none;
        }
      .feedbackBox{
        padding: 10px;
        border: 2px solid #000;
        margin: 10px;

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
            <div class="feedbackBox">
              <!-- Replace the text in this with something like "thanks for rating!" after submit is pressed, for user feedback -->
              <p>Rate your experience!</p>
            </div>
            <ul>
              <li>
                <input type="radio" name="5Star" id="5Star-answer-A" value="A">
                <label for="rating-5-answers">5) Great!</label>
              </li>
              <li>
                <input type="radio" name="4Star" id="4Star-answer-B" value="B">
                <label for="rating-4-answers">4) Good!</label>
              </li>
              <li>
                <input type="radio" name="3Star" id="3Star-answer-C" value="C">
                <label for="rating-3-answers">3) Okay</label>
              </li>
              <li>
                <input type="radio" name="5Star" id="5Star-answer-D" value="D">
                <label for="rating-2-answers">2) Been to better..</label>
              </li>
              <li>
                <input type="radio" name="5Star" id="5Star-answer-E" value="E">
                <label for="rating-1-answers">1) What just happened?</label>
              </li>
            </ul>
            <button type="submit" class="control-button">Submit</button>
          </div>
        </div>
        <div class="ResultColumnRight">
          <h3>Date: '.$result['DATE'].'</h3>
          <h3>Time: '.$result['TIME'].'</h3>
          <h3>Location: '.$result['LOCATION'].'</h3>
          <p>'.$result['LONG_DESC'].'</p>
        </div>
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
