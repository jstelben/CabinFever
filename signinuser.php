<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
		<meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./Styles/DefaultHeaderFooterStyle.css">
    <style type="text/css">
      .UserAccessRow{
        display: none;
      }
      main{
        width: 100%;
      }
        .MainWrap{
          overflow: auto;
          overflow: hidden;
          width: 800px;
          padding: 100px;
          margin-left: auto;
          margin-right: auto;
          background-color: #FFF;
          font-family: 'Khula', sans-serif;
        }

          .LeftMainFloat{
            float: left;
            width: 320px;
            padding-top: 100px
          }

            .LeftMainFloat h2{
              margin: 0 1.5em 1em 1.5em;
              font-size: 150%;
              font-family: 'Khula', sans-serif;
            }
            .control-group{
              margin-bottom: 0.5em;
            }
              .control-label{
                display: inline-block;
                vertical-align: middle;
                width: 100px;
                margin-right: 10px;
                text-align: right;
              }
              .control-input{
                display: inline-block;
                vertical-align: middle;
                padding: 0.5em 0.6em;
                border: 1px solid #CCC;
                box-shadow: inset 0 1px 3px #DDD;
              }
            .control{
              margin: 1.5em 0 0 8em;
            }
              .control-button{
                touch-action: none;
                padding: 8px 16px 8px 16px;
                border-radius: 2px;
                cursor: pointer;
                background-color: #99BBFF;
                color: #FFF;
                text-align: center;
                text-decoration: none;
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
      <div class="LeftMainFloat">
        <h2>Sign in to CabinFever!</h2>
        <form class="aligned-form" action="JavaScript:addUser()" method="post">
          <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <input class="control-input" id="email" type="text" placeholder="Email Address">
          </div>
          <div class="control-group">
            <label class="control-label" for="password">Password</label>
            <input class="control-input" type="password" id="password"type="text" placeholder="Password">
          </div>
          <div class="control">
            <button type="submit" class="control-button">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <div class="AccentColorBox">
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
