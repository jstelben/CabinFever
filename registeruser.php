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

        .MainWrap{
          position: relative;
          width: 800px;
          padding: 100px;
          margin-left: auto;
          margin-right: auto;
          background-color: #FFF;
          font-family: 'Khula', sans-serif;
        }

          .MainWrap h2{
            margin: 0 0 1em 1.5em;
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
            margin: 1.5em 0 0 10em;
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
      <h2>Sign Up to CabinFever!</h2>
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
	function addUser(event){
		var xmlhttp;
		xmlhttp = new XMLHttpRequest();
		var userEmail =  document.getElementById('email').value;
		var userPassword =  document.getElementById('password').value;
		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200 && xmlhttp.status < 300){
					//switch pages here
					var returnVal = xmlhttp.responseText;
					if(returnVal == "Success")
					{
						//navigate
						document.location.href = "quiz.php";
					}
					else if(returnVal == "Error")
					{
						alert("That email is already taken.");
					}
					else if(returnVal == "Invalid")
					{
						alert("That email is not valid.");
					}
				}
			}
		};
		xmlhttp.open('POST', 'adduser.php');
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("newemail=" + userEmail + "&newpassword=" + userPassword);
	};
</script>