function getGeoLocation(){
	if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(DisplayLocation);
    } else {
	   //Error MSG
       $("#get_location").text("Geolocation is not susported by this browser.");
    }
}

function VerifyLocation(Location,lat,lng){
	var targetLat = 0;
	var targetLng = 0;
	switch (Location){
		case "Queen Street":
			targetLat = -27.469366;
			targetLng = 153.025199;
			break;
		case "Toowong":
			targetLat = -27.561073;
			targetLng = 151.948808;
			break;
		case "Indooroopilly":
			targetLat = -27.499278;
			targetLng = 152.972655;
			break;
		case "St Lucia":
			targetLat = -27.499311;
			targetLng = 153.015034;
			break;
		case "GardenCity":
			targetLat = -27.562747;
			targetLng = 153.082502;
			break;
	}
	
	return Math.sin(lat * Math.PI) * Math.sin(targetLat * Math.PI) +
      Math.cos(lat * Math.PI) * Math.cos(targetLat * Math.PI) * Math.cos(Math.abs(lng - targetLng) * Math.PI);
}

function DisplayLocation(geoLocation){
	var lat = parseFloat(geoLocation.coords.latitude);
	var lng = parseFloat(geoLocation.coords.longitude);
	var latlng = lat+","+lng;
	var apiKey = "AIzaSyAdj18Y63tPJiv-xYoOMAyn5yz3Jbibo9M";
	var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+latlng+"&key="+apiKey;
	//reverse geolocation
	$.getJSON(url,function( data ){
		var getCurrLocation = data.results[0].address_components[1].short_name;
		if(VerifyLocation(getCurrLocation,lat,lng)>0.9999){
			//alert("Yes "+VerifyLocation(getCurrLocation,lat,lng));
			$("#get_location").html("You are at: " + getCurrLocation);
		}else{
			//alert("No "+VerifyLocation(getCurrLocation,lat,lng));
			$("#get_location").html("You are out of area");
		}
	});	
}

function ChangeFragment(Event){
	switch(Event.id){
		case "bt_news":
			$("#loadPage" ).load("news.php");
			break;
		case "bt_yourThoughts":
			$("#loadPage" ).load("yourThoughts.php");
			break;
		case "bt_qr":
			$("#loadPage" ).load("qr.php");
			break;
	}
}

$( document ).ready(function() {
		/*
			Menu
		*/
		$( "#loadPage" ).load("homepage.php");
		
		
		/*
			Location
		*/
		getGeoLocation();
});
