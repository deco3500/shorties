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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- index -->
    <link href="css/index.css" rel="stylesheet">
    <script src="js/menu.js"></script>
    <!-- main -->
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
  	<div class="jumbotron">
	<div id="get_location" align="center">Current Location: Toowong</div>
	</div>
	<div id="map" style="width:400px; height:400px; align-self: center; background:white"></div>

	<script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDecxBsk-gbRtKg-ZtnkK1VqMDzQ0-6P3s&callback=initMap">
    </script>

	<div class="load_continer">

	  <div><a href="#" class="btn btn-info btn-lg btn-block" role="button">News</a></div>
	  <div><a href="#" class="btn btn-info btn-lg btn-block" role="button">Your Thoughts</a></div>
	  <div><a href="#" class="btn btn-info btn-lg btn-block" role="button">QR Code</a></div>

		<!--<div><button class="bt_news">News</button></div>
		<div><button class="bt_yourThought">Your Thoughts</button></div>
		<div><button class="bt_qr">QR Code</button></div>-->
	</div>

    
  </body>
</html>
