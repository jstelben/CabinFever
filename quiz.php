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
                  id="question-1-answers-A" value="A">
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
		document.location.href = "result.php";
	}
</script>
