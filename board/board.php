<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.png">
  <title>Notice Me!</title>
   <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=3.0.1'></script>    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- board -->
    <link href="css/style.css" rel="stylesheet">
    <!--<script src="js/infinite-rotator.js"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- LoadNews -->
	<script src="js/infinite-rotator.js"></script>
	<script src="js/newsHelper.js"></script>
  </head>

<body>
<!--refreshes responsivesontainer every 5mins is 300000 in milliseconds-->
<!--currently set to 1min so you can see the effect 60000
<script>
var refreshId = setInterval(function()
{
     $('#responsecontainer').fadeOut("slow").load('.row').fadeIn("slow");
}, 3000); -->
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("timer").innerHTML = d.toLocaleTimeString();  
}
</script>

<div class="container_title">
  <div class="page-header">
    <h1>Notice Me Board</h1></div>
</div>


<div class="container">
  <div class="row">
  
    <div class="col-lg-6" style="background-color: none; border-right: 2px solid #000080">

      <h1>News</h1>
      <br>
      
      <div id="rotating-item-wrapper">
	      <!--
        <img src="img/image1.jpg"  class="rotating-item"/>
        <img src="img/image2.jpg" class="rotating-item"/>
        <img src="img/image3.jpg" class="rotating-item"/>
        <br>-->
        
      </div>

      <!--<img src="img/image1.jpg" class="img-rounded" alt="snake"/>
      </p>
      <div class="text-xs-center">
        <img src="img/lol.png" alt="lol" width="20" height="20"/>LOL
        <img src="img/omg.png" alt="omg" width="20" height="20"/>OMG
        <img src="img/wtf.png" alt="wtf" width="20" height="20"/>WTF
        <img src="img/yas.png" alt="yas" width="20" height="20"/>YAS
      </div><br>


      <div id="topic2" class="hidden">
      <img src="img/image2.jpg" class="img-rounded" />
      <div class="text-xs-center">
        <img src="img/lol.png" alt="lol" width="20" height="20"/>LOL
        <img src="img/omg.png" alt="omg" width="20" height="20"/>OMG
        <img src="img/wtf.png" alt="wtf" width="20" height="20"/>WTF
        <img src="img/yas.png" alt="yas" width="20" height="20"/>YAS
      </div><br>
      </div>

      <div id="topic3" class="hidden">
      <img src="img/image3.jpg" class="img-rounded"/>
      <div class="text-xs-center">
        <img src="img/lol.png" alt="lol" width="20" height="20"/>LOL
        <img src="img/omg.png" alt="omg" width="20" height="20"/>OMG
        <img src="img/wtf.png" alt="wtf" width="20" height="20"/>WTF
        <img src="img/yas.png" alt="yas" width="20" height="20"/>YAS
      </div><br>
      </div>-->
      <br>
      <br>
      <div class="emoji">
        <img src="img/sad.png" alt="sad" width="40" height="40"/>SAD
        <img src="img/smile.png" alt="smile" width="40" height="40"/>SMILE
        <img src="img/joy.png" alt="joy" width="40" height="40"/>JOY
        <img src="img/angry.png" alt="angry" width="40" height="40"/>ANGRY
        <img src="img/heart.png" alt="heart" width="40" height="40"/>HEART
        <img src="img/crying.png" alt="crying" width="40" height="40"/>CRYING
      </div>

      <br>
      <p id="timer"></p>
      <p>*News topic currently updates every 1 min*</p>
    </div>


    <div class="col-lg-6" style="background-color: none";>

      <h1>Your Thoughts</h1>
      <br>
      <p>Many messages will appear from users using the app</p>
        <img src="img/sad.png" alt="sad" width="40" height="40"/>SAD
        <img src="img/smile.png" alt="smile" width="40" height="40"/>SMILE
        <img src="img/joy.png" alt="joy" width="40" height="40"/>JOY
        <img src="img/angry.png" alt="angry" width="40" height="40"/>ANGRY
        <img src="img/heart.png" alt="heart" width="40" height="40"/>HEART
        <img src="img/crying.png" alt="crying" width="40" height="40"/>CRYING
      <br>
      <br>
      <p>Many messages will appear from users using the app</p>
        <img src="img/sad.png" alt="sad" width="40" height="40"/>SAD
        <img src="img/smile.png" alt="smile" width="40" height="40"/>SMILE
        <img src="img/joy.png" alt="joy" width="40" height="40"/>JOY
        <img src="img/angry.png" alt="angry" width="40" height="40"/>ANGRY
        <img src="img/heart.png" alt="heart" width="40" height="40"/>HEART
        <img src="img/crying.png" alt="crying" width="40" height="40"/>CRYING
      <br>
      <br>
      <p>Many messages will appear from users using the app</p>
        <img src="img/sad.png" alt="sad" width="40" height="40"/>SAD
        <img src="img/smile.png" alt="smile" width="40" height="40"/>SMILE
        <img src="img/joy.png" alt="joy" width="40" height="40"/>JOY
        <img src="img/angry.png" alt="angry" width="40" height="40"/>ANGRY
        <img src="img/heart.png" alt="heart" width="40" height="40"/>HEART
        <img src="img/crying.png" alt="crying" width="40" height="40"/>CRYING
      <br>
      <br>
      <p>Many messages will appear from users using the app</p>
        <img src="img/sad.png" alt="sad" width="40" height="40"/>SAD
        <img src="img/smile.png" alt="smile" width="40" height="40"/>SMILE
        <img src="img/joy.png" alt="joy" width="40" height="40"/>JOY
        <img src="img/angry.png" alt="angry" width="40" height="40"/>ANGRY
        <img src="img/heart.png" alt="heart" width="40" height="40"/>HEART
        <img src="img/crying.png" alt="crying" width="40" height="40"/>CRYING

  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
<div><img src="img/qr_code.png" alt="Board QR code" width="150" height="150"></div>
</footer>

</body>
</html>