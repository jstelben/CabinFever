<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
		<meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./jquery.js"></script>
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

        .SlideShowWrap{
          position: relative;
          width: 1000px;
          height: 400px;
          margin-left: auto;
          margin-right: auto;
          background-color: #FFF;
        }

          .SlideShowWrap img{
            position: absolute;
          }

        .BreakWrap{
          text-align: center;
          width: 100%;
          height: 125px;
          background-color: #555555;
        }

          .InnerBreak{
            position: relative;
            text-align: center;
            width:1150px;
            height: 75px;
            top:50%;
        		transform: translateY(-50%);
            border-radius: 32.5px;
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
          margin-left: auto;
          margin-right: auto;
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
                border-top: solid;
                border-bottom: solid;
                margin-right: 180px;
              }

              .ContentBox p{
                margin-top: 10px;
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
      <div class="SlideShowWrap">
        <img src="./Assets/img1.jpg">
        <img src="./Assets/img2.jpg">
        <img src="./Assets/img3.jpg">
        <img src="./Assets/img4.jpg">
      </div>
      <div class="BreakWrap">
        <div class="InnerBreak">
          <h1>-Emphasized Text-</h1>
        </div>
      </div>

      <div class="MainContentWrap">
        <div class="ContentColumn">
          <div class="ContentBox">
            <h3>Join</h3>
            <p>Find people you never knew that have similiar interests and hobbies
               as we can guide you to the communities you belong to.
              If you find yourself to be motivated to start a new following,
              you can start your own events and we can get the interested parties
              to you.</p>
          </div>
          <div class="ContentBox">
            <img src="./Assets/Join.jpg">
          </div>
        </div>

        <div class="ContentColumn">
          <div class="ContentBox">
            <img src="./Assets/Ship.jpg">
          </div>
          <div class="ContentBox">
            <h3>Discover</h3>
            <p>We can help you explore the many different pass times and hobbies
              that exist out there. And with every feedback that you give us about your events,
              we can be more accurate to what you're really interested in.
              Then we can filter out the good ones just for your individual taste.</p>
          </div>
        </div>

        <div class="ContentColumn">
          <div class="ContentBox">
            <h3>Expand</h3>
            <p>Our services might help bring new customers to your business,
              but only if you let us. Begin a collaboration to start a whole new
              burst of activity and spark new interest in the businesses you own.</p>
          </div>
          <div class="ContentBox">
            <img src="./Assets/Business.jpg">
          </div>
        </div>
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
