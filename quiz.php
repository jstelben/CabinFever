<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./jquery.js"></script>
    <style type="text/css">
    html{

    }

    body{
      margin: 0px;
      background-color: #C1D0FF;
    }

    h1, h2, h3{
      margin: 0px;
      font-family: 'Play', sans-serif;
    }

    p{
      margin: 0px;
      font-family: 'Khula', sans-serif;
    }

    header{
      overflow: auto;
      overflow: hidden;
      width: 1000px;
      margin-left: auto;
      margin-right: auto;
      background-color: #222222;
    }

      .HeaderLeft{
        float: left;
        width: 425px;
        height: 120px;
        padding-left: 75px;
        padding-right: 100px;
        padding-top: 65px;
        padding-bottom: 65px;
      }

        .LogoWrap{
          float: left;
          width: 120px;
          height: 120px;
          border-radius: 60px;
          background-color: #95B6FF;
        }

        .SloganWrap{
          float:left;
          text-align: center;
          width: 305px;
          height: 120px;
        }

          .SloganWrap h1{
            font-size: 300%;
            color: #E05B00;
          }

          .SloganWrap h2{
            text-align: left;
            font-size: 150%;
            padding-left: 36px;
            color: #FFF;
          }

      .HeaderRight{
        float: left;
        width: 400px;
        height: 250px;
      }

        .SocialMediaRow{
          overflow: auto;
          overflow: hidden;
          margin-top: 4px;
          margin-bottom: 4px;
        }

          .SocialMediaIcon{
            float: right;
            margin-right: 4px;
          }

        .UserAccessRow{
          margin-top: 40px;
          margin-right: 50px;
        }

          .UserAccessRow h3{
            text-align: right;
            font-size: 150%;
            color: #FFF;
          }

    main{
      width: 100%;
    }

      .QuizWrap{
        position: relative;
        width: 1000px;
        height: 800px;
        margin-left: auto;
        margin-right: auto;
        background-color: #FFF;
      }

    footer{
      overflow: auto;
      width: 1000px;
      margin-left: auto;
      margin-right: auto;
      background-color: #222222;
    }

      footer h2{
        font-size: 150%;
        padding-top: 2px;
        padding-bottom: 3px;
        border-top: solid;
        border-bottom: solid;
        border-width: 1px;
        margin-right: 125px;
        color:#FFF;
      }

      .FooterColumn{
        float: left;
        width: 250px;
        height: 250px;
        margin: 25px;
      }

      .AboutColumn{

      }

      .ExtraColumn{
        width: 350px;
      }

      .ContactColumn{

      }
    </style>
  </head>
  <body>
    <header>
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
        <div class="UserAccessRow">
          <h3>Sign In</h3>
          <h3>Register</h3>
        </div>
      </div>
    </header>

    <main>
      <div class="QuizWrap">
      </div>
    </main>

    <footer>
      <div class="FooterColumn AboutColumn">
        <h2>About</h2>
      </div>
      <div class="FooterColumn ExtraColumn">
        <h2>Additionally</h2>
      </div>
      <div class="FooterColumn ContactColumn">
        <h2>Contact</h2>
      </div>
    </footer>
  </body>
</html>
