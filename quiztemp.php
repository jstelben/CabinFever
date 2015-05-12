<!DOCTYPE html>
<html>
  <head>
    <title>CabinFever</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khula' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./Styles/DefaultHeaderFooterStyle.css">
    <script type="text/javascript" src="./Assets/jquery.js"></script>
    <style type="text/css">
      main{
        width: 100%;
      }
        .QuizWrap{
          position: relative;
          width: 800px;
          padding: 100px;
          margin-left: auto;
          margin-right: auto;
          background-color: #FFF;
          font-family: 'Khula', sans-serif;
        }
          .QuizWrap h2, h3{
            font-family: 'Khula', sans-serif;
          }
          .QuizWrap li{
            margin-bottom: 2em;

          }
          .question-answer-wrap{
            margin: 4px 0 4px 0;
          }
          .control{
            margin: 1.5em 0 0 6em;
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
  </head>
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
      <div class="QuizWrap">
        <h2><b>Quiz</b></h2>
        <p>Please fill out a short quiz before you begin CabinFever</p>
        <form class="quiz" action="JavaScript:submitForm()">
          <ol>
            <li>
              <h3>Would you rather:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-1-answers"
                  id="question-1-answers-A" value="A">
                <label for="question-1-answers">A) Party with strangers</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-1-answers"
                  id="question-1-answers-B" value="B">
                <label for="question-1-answers">B) Night in with a good book</label>
              </div>
            </li>
            <li>
              <h3>Would you rather:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-2-answers"
                  id="question-2-answers-A" value="A">
                <label for="question-2-answers">A) Walk in the woods</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-2-answers"
                  id="question-2-answers-B" value="B">
                <label for="question-2-answers">B) Stroll through the concrete jungle</label>
              </div>
            </li>
            <li>
              <h3>Would you rather go:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-3-answers"
                  id="question-3-answers-A" value="A">
                <label for="question-3-answers">A) Skydiving</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-3-answers"
                  id="question-3-answers-B" value="B">
                <label for="question-3-answers">B) Roller blading</label>
              </div>
            </li>
            <li>
              <h3>Would you rather play:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-4-answers"
                  id="question-4-answers-A" value="A">
                <label for="question-4-answers">A) Video games</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-4-answers"
                  id="question-4-answers-B" value="B">
                <label for="question-4-answers">B) Board games</label>
              </div>
            </li>
            <li>
              <h3>Would you rather:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-5-answers"
                  id="question-5-answers-A" value="A">
                <label for="question-5-answers">A) Paying $20 to bowl with music, neon lights, professional lanes, and great people all around you</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-5-answers"
                  id="question-5-answers-B" value="B">
                <label for="question-5-answers">B) Go bowling for free at your sort-of friend’s 30-year-old basement alley</label>
              </div>
            </li>
            <li>
              <h3>Would you rather play:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-6-answers"
                  id="question-6-answers-A" value="A">
                <label for="question-6-answers">A) Chess with a grandmaster</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-6-answers"
                  id="question-6-answers-B" value="B">
                <label for="question-6-answers">B) Connect four with a senile grandmaster</label>
              </div>
            </li>
            <li>
              <h3>Would you rather go to a:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-7-answers"
                  id="question-7-answers-A" value="A">
                <label for="question-7-answers">A) Indoor</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-7-answers"
                  id="question-7-answers-B" value="B">
                <label for="question-7-answers">B) Outdoor pool party</label>
              </div>
            </li>
            <li>
              <h3>Would you rather go to a:</h3>
              <div class="question-answer-wrap">
                <input type="radio" name="question-8-answers"
                  id="question-8-answers-A" value="A">
                <label for="question-8-answers">A) Catered party with total strangers</label>
              </div>
              <div class="question-answer-wrap">
                <input type="radio" name="question-8-answers"
                  id="question-8-answers-B" value="B">
                <label for="question-8-answers">B) Party with friends where you have to bring your own food</label>
              </div>
            </li>
          </ol>
          <div class="control">
            <button type="submit" class="control-button">Submit</button>
          </div>
        </form>
      </div>
    </main>

    <footer>
      <div class="FooterAccentColorBox">
      </div>

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

<script>
	function submitForm(event){
		//algorithm();
		var xmlhttp;
		xmlhttp = new XMLHttpRequest();
		var question1, question2, question3, question4, question5, question6, question7, question8;
		
		if(document.getElementById('question-1-answers-A').checked)
		{
			question1 = 'A';
		}
		else if(document.getElementById('question-1-answers-B').checked)
		{
			question1 = 'B';
		}
		else
		{
			alert("You need to answer question 1");
			return;
		}
		if(document.getElementById('question-2-answers-A').checked)
		{
			question2 = 'A';
		}
		else if(document.getElementById('question-2-answers-B').checked)
		{
			question2 = 'B';
		}
		else
		{
			alert("You need to answer question 2");
			return;
		}
		if(document.getElementById('question-3-answers-A').checked)
		{
			question3 = 'A';
		}
		else if(document.getElementById('question-3-answers-B').checked)
		{
			question3 = 'B';
		}
		else
		{
			alert("You need to answer question 3");
			return;
		}
		if(document.getElementById('question-4-answers-A').checked)
		{
			question4 = 'A';
		}
		else if(document.getElementById('question-4-answers-B').checked)
		{
			question4 = 'B';
		}
		else
		{
			alert("You need to answer question 4");
			return;
		}
		if(document.getElementById('question-5-answers-A').checked)
		{
			question5 = 'A';
		}
		else if(document.getElementById('question-5-answers-B').checked)
		{
			question5 = 'B';
		}
		else
		{
			alert("You need to answer question 5");
			return;
		}
		if(document.getElementById('question-6-answers-A').checked)
		{
			question6 = 'A';
		}
		else if(document.getElementById('question-6-answers-B').checked)
		{
			question6 = 'B';
		}
		else
		{
			alert("You need to answer question 6");
			return;
		}
		if(document.getElementById('question-7-answers-A').checked)
		{
			question7 = 'A';
		}
		else if(document.getElementById('question-7-answers-B').checked)
		{
			question7 = 'B';
		}
		else
		{
			alert("You need to answer question 7");
			return;
		}
		if(document.getElementById('question-8-answers-A').checked)
		{
			question8 = 'A';
		}
		else if(document.getElementById('question-8-answers-B').checked)
		{
			question8 = 'B';
		}
		else
		{
			alert("You need to answer question 8");
			return;
		}
		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200 && xmlhttp.status < 300){
					//switch pages here
					var returnVal = xmlhttp.responseText;
					if(returnVal == "Success")
					{
						//navigate
						document.location.href = "result.php";
					}
					else if(returnVal == "Error")
					{
						alert("Unable to process quiz results.");
					}
				}
			}
		};
		xmlhttp.open('POST', 'quizresults.php');
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("question1=" + question1 + "&question2=" + question2 + "&question3=" + question3 +
			"&question4=" + question4 + "&question5=" + question5 + "&question6=" + question6 +
			"&question7=" + question7 + "&question8=" + question8);
	}
	function algorithm()
	{
		var xmlhttp;
		xmlhttp = new XMLHttpRequest();
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
		var events = [];
		<?php session_start(); $_SESSION['eventNum'] = 0; ?>
		for(int i = 0; i < 9; i++)
		{
			<?php session_start(); require('getevents.php'); ?>
			var event = [];
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['physical']); ?>);
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['challenging']); ?>);
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['relaxing']); ?>);
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['food']); ?>);
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['money']); ?>);
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['historical']); ?>);
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['cultural']); ?>);
			event.push(<?php session_start(); echo json_encode(''.$_SESSION['events'][$_SESSION['eventNum']]['outside']); ?>);
			<?php session_start(); $_SESSION['eventNum']++; ?>
			events.push(event);
		}
		
		for(var i = 0; i < events.length; i++)
		{
			for(var j = 0; j < events[i].length; j++)
			{
				alert(events[i][j]);	
			}
		}
	}
</script>
