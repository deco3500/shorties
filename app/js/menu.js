function pickMenuItem(target){
	var picked;
	$( "#loadPage" ).empty();
        	switch(target){
			    case "Home":
			    	picked = target;
			        $( "#loadPage" ).empty();
			        break;
			    case "Printer List":
			    	picked = target;
			        $( "#loadPage" ).load("printerList.php");
			        break;
			    case "Route Planner":
			    	picked = target;
					$( "#loadPage" ).load("routePlanner.php");
			        //alert("RoutePlanenr");
			        break;
        	}
    return picked;
}

function loadPage(picked){
	var picked;
        	switch(e.target.text){
			    case "Home":
			    	picked = "Home";
			        //alert("home");
			        break;
			    case "Printer List":
			    	picked = "Printer List";
			        //alert("pinterList");
			        break;
			    case "Route Planner":
			    	picked = "Route Planner";
			        //alert("RoutePlanenr");
			        break;
        	}
    return picked;
}
$( document ).ready(function() {
		$( "#loadPage" ).load("main.php");
});