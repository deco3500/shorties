//Legal Address
var legalAddress = ["GardenCity", "Queenstreet", "Sunnybank", "Toowong"]; //Using http://www.textfixer.com/tools/alphabetical-order.php to Sort
var getCurrLocation;
function getGeoLocation(){
	if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(DisplayLocation);
    } else {
	   //Error MSG
       $("#get_location").text("Geolocation is not susported by this browser.");
    }
}

function DisplayLocation(geoLocation){
	var latlng = parseFloat(geoLocation.coords.latitude)+","+parseFloat(geoLocation.coords.longitude);
	var apiKey = "AIzaSyAdj18Y63tPJiv-xYoOMAyn5yz3Jbibo9M";
	var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+latlng+"&key="+apiKey;
	//reverse geolocation
	$.getJSON(url,function( data ){
		getCurrLocation = data.results[0].address_components[0].long_name;
		$("#get_location").html("You are at: "+getCurrLocation);
	});
	
	
	
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
		//$("#get_location").text(getGeoLocation());
});
