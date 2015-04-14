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

    <div class="HeaderAccentColorBox">
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
	  	$_SESSION['rand1'] = 0;
	  	$_SESSION['rand2'] = 0;
		$_SESSION['rand3'] = 0;
		
		$_SESSION['rand1'] = rand(1, 8);
		$_SESSION['rand2'] = rand(1, 8);
		while($_SESSION['rand1'] == $_SESSION['rand2'])
		{
			$_SESSION['rand2'] = rand(1, 8);
		}
		$_SESSION['rand3'] = rand(1, 8);
		while($_SESSION['rand1'] == $_SESSION['rand3'] || $_SESSION['rand2'] == $_SESSION['rand3'])
		{
			$_SESSION['rand3'] = rand(1, 8);	
		}
		
		switch($_SESSION['rand1'])
		{
			case 1:
				{
					echo "
					<img src='./Assets/lacrosse.jpg'>
          			<h3>Lacrosse vs Vassar College</h3>
          			<p>RIT Lacrosse Match</p>";
					break;
				}
			case 2:
				{
					echo "
					<img src='./Assets/rockyhorror.jpg'>
          			<h3>Rocky Horror Picture Show</h3>
          			<p>A Fun Impromptu Show</p>";
					break;
				}
			case 3:
				{
					echo "
					<img src='./Assets/lego.jpg'>
          			<h3>Lego Club</h3>
          			<p>Come Join Other Lego Enthusiasts</p>";
					break;
				}
			case 4:
				{
					echo "
					<img src='./Assets/icecream.jpg'>
          			<h3>Ben & Jerry's Free Cone Day</h3>
          			<p>Come Get A Free Cone On Us!</p>";
					break;
				}
			case 5:
				{
					echo "
					<img src='./Assets/cards.jpg'>
          			<h3>RWAG</h3>
          			<p>Join Us For Card Games And Board Games</p>";
					break;
				}
			case 6:
				{
					echo "
					<img src='./Assets/sniper.jpg'>
          			<h3>American Sniper</h3>
          			<p>Come Watch This Great Movie For Free</p>";
					break;
				}
			case 7:
				{
					echo "
					<img src='./Assets/improv.jpg'>
          			<h3>Improv Show</h3>
          			<p>Be Entertained By Our Improv Troup</p>";
					break;
				}
			case 8:
				{
					echo "
					<img src='./Assets/poetry.jpg'>
          			<h3>Poetry Slam</h3>
          			<p>Show Us Your Slam Poetry Skills</p>";
					break;
				}
		}
	  ?>
	  </div>
        <div class="ResultColumn">
          <?php
          	switch($_SESSION['rand2'])
			{
			case 1:
				{
					echo "
					<img src='./Assets/lacrosse.jpg'>
          			<h3>Lacrosse vs Vassar College</h3>
          			<p>RIT Lacrosse Match</p>";
					break;
				}
			case 2:
				{
					echo "
					<img src='./Assets/rockyhorror.jpg'>
          			<h3>Rocky Horror Picture Show</h3>
          			<p>A Fun Impromptu Show</p>";
					break;
				}
			case 3:
				{
					echo "
					<img src='./Assets/lego.jpg'>
          			<h3>Lego Club</h3>
          			<p>Come Join Other Lego Enthusiasts</p>";
					break;
				}
			case 4:
				{
					echo "
					<img src='./Assets/icecream.jpg'>
          			<h3>Ben & Jerry's Free Cone Day</h3>
          			<p>Come Get A Free Cone On Us!</p>";
					break;
				}
			case 5:
				{
					echo "
					<img src='./Assets/cards.jpg'>
          			<h3>RWAG</h3>
          			<p>Join Us For Card Games And Board Games</p>";
					break;
				}
			case 6:
				{
					echo "
					<img src='./Assets/sniper.jpg'>
          			<h3>American Sniper</h3>
          			<p>Come Watch This Great Movie For Free</p>";
					break;
				}
			case 7:
				{
					echo "
					<img src='./Assets/improv.jpg'>
          			<h3>Improv Show</h3>
          			<p>Be Entertained By Our Improv Troup</p>";
					break;
				}
			case 8:
				{
					echo "
					<img src='./Assets/poetry.jpg'>
          			<h3>Poetry Slam</h3>
          			<p>Show Us Your Slam Poetry Skills</p>";
					break;
				}
		}
	  ?>
        </div>
        <div class="ResultColumn">
        <?php
          switch($_SESSION['rand3'])
			{	
			case 1:
				{
					echo "
					<img src='./Assets/lacrosse.jpg'>
          			<h3>Lacrosse vs Vassar College</h3>
          			<p>RIT Lacrosse Match</p>";
					break;
				}
			case 2:
				{
					echo "
					<img src='./Assets/rockyhorror.jpg'>
          			<h3>Rocky Horror Picture Show</h3>
          			<p>A Fun Impromptu Show</p>";
					break;
				}
			case 3:
				{
					echo "
					<img src='./Assets/lego.jpg'>
          			<h3>Lego Club</h3>
          			<p>Come Join Other Lego Enthusiasts</p>";
					break;
				}
			case 4:
				{
					echo "
					<img src='./Assets/icecream.jpg'>
          			<h3>Ben & Jerry's Free Cone Day</h3>
          			<p>Come Get A Free Cone On Us!</p>";
					break;
				}
			case 5:
				{
					echo "
					<img src='./Assets/cards.jpg'>
          			<h3>RWAG</h3>
          			<p>Join Us For Card Games And Board Games</p>";
					break;
				}
			case 6:
				{
					echo "
					<img src='./Assets/sniper.jpg'>
          			<h3>American Sniper</h3>
          			<p>Come Watch This Great Movie For Free</p>";
					break;
				}
			case 7:
				{
					echo "
					<img src='./Assets/improv.jpg'>
          			<h3>Improv Show</h3>
          			<p>Be Entertained By Our Improv Troup</p>";
					break;
				}
			case 8:
				{
					echo "
					<img src='./Assets/poetry.jpg'>
          			<h3>Poetry Slam</h3>
          			<p>Show Us Your Slam Poetry Skills</p>";
					break;
				}
		}
	  ?>
        </div>
      </div>

      <div id="Conclusion">
        <!--- DONT FORGET TO CHANGE THIS LINK TO .PHP ****************************************** -->
        <h2><a href="./index.html">Reset User Testing</a></h2>
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
