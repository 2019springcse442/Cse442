<?php
	include 'database.php';
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="OfficeNavigation.css">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Laila" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
	<!-- navigation bar -->
	<header class="header">
	<a href="homepage.php" class="logo">UBStalking'-'</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	<ul class="menu">
		<li><a href="OfficeNavigation.php">Office Navigation</a></li>
		<li><a href="EventHandler.php">Event Handler</a></li>
		<li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
	</ul>
</header>
<!-- Search Bar -->
<div>
 <form action="Result.php" method="post">
	 <input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" name = "search"  maxlength ="50"
	 autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" name = "submit-search" value="Go!"/>
 </form>
 </div>



<!-- page title -->
<div class="big-title">
<h1>Office Navigation</h1>
</div>

<!-- Navigation choices-->
<div id="floating-panel">
<span>Start: </span>
<select id="start">
  <option value="2637+42 Buffalo, New York">North Campus Davis Hall</option>
  <option value="2626+CW Getzville, Amherst, NY">Knox Hall</option>
  <option value="2626+85 Buffalo, New York">Capen</option>
  <option value="2638+34 Buffalo, New York">Book Store</option>
  <option value="2627+FG Getzville, Amherst, NY">Student Union</option>
  <option value="2628+Q2 Amherst, NY">Commons</option>

	  <option value="2658+J2 Getzville, Amherst, NY">Ellicott Complex</option>
	  <option value="		2624+V5 Getzville, Amherst, NY">Governor's Complex</option>


</select>

<span>End: </span>
<select id="end">
  <option value="2626+85 Buffalo, New York">Capen</option>
  <option value="2627+4H Buffalo, New York">LockWood</option>
  <option value="2628+9Q Buffalo, New York">UB Center for the Arts</option>
  <option value="2627+4X Buffalo, New York">Clemens</option>
  <option value="X6X6+VR Getzville, Amherst, NY">Park Hall</option>
  <option value="2629+2H Buffalo, New York">Alumni Arena</option>
  <option value="2657+HG Getzville, Amherst, NY">C3</option>
<option value="X54M+QP BUffalo, New York">Goodyear Hall</option>
</select>

<span>Travel Mode:</span>
<select id="mode">
	<option value="WALKING">Walking</option>

  <option value="DRIVING">Driving</option>
  <option value="BICYCLING">Bicycling</option>
	  <option value="TRANSIT">Transit</option>
</select>
   </div>
<!-- Map -->
    <div id="map"></div>
		 &nbsp;
<!-- Direction details -->
<div id="warnings-panel"></div>
	 <div id="right-panel"></div>

    <script>
		var map, infoWindow;
		 function initMap() {
				 var directionsService = new google.maps.DirectionsService;
		 var directionsDisplay = new google.maps.DirectionsRenderer;
			 map = new google.maps.Map(document.getElementById('map'), {
				 center: {lat: 43.0008, lng: -78.7890},
				 zoom: 15
			 });
			 infoWindow = new google.maps.InfoWindow;
			 if (navigator.geolocation) {
	          navigator.geolocation.getCurrentPosition(function(position) {
	            var pos = {
	              lat: position.coords.latitude,
	              lng: position.coords.longitude
	            };

	            infoWindow.setPosition(pos);
	            infoWindow.setContent('You Are Here!.');
	            infoWindow.open(map);
	            map.setCenter(pos);
	          }, function() {
	            handleLocationError(true, infoWindow, map.getCenter());
	          });
	        }

				 directionsDisplay.setMap(map);
		 directionsDisplay.setPanel(document.getElementById('right-panel'));
		 var control = document.getElementById('floating-panel');
		 control.style.display = 'inline-block';


				var onChangeHandler = function() {
			 calculateAndDisplayRoute(directionsService, directionsDisplay);
		 };
		 document.getElementById('start').addEventListener('change', onChangeHandler);
		 document.getElementById('end').addEventListener('change', onChangeHandler);
		 calculateAndDisplayRoute(directionsService, directionsDisplay);
						 document.getElementById('mode').addEventListener('change', function() {
							 calculateAndDisplayRoute(directionsService, directionsDisplay);
						 });
	 }
			// Try HTML5 geolocation.
			 if (navigator.geolocation) {
				 navigator.geolocation.getCurrentPosition(function(position) {
					 var pos = {
						 lat: position.coords.latitude,
						 lng: position.coords.longitude
					 };
					 infoWindow.setPosition(pos);
					 infoWindow.setContent('Location found.');
					 infoWindow.open(map);
					 map.setCenter(pos);
				 }, function() {
					 handleLocationError(true, infoWindow, map.getCenter());
				 });
			 }
	 function calculateAndDisplayRoute(directionsService, directionsDisplay) {
		 var selectedMode = document.getElementById('mode').value;
		 directionsService.route({
			 origin:document.getElementById('start').value,
			 destination: document.getElementById('end').value,
			 travelMode: google.maps.TravelMode[selectedMode]
		 }, function(response, status) {
			 if (status === 'OK') {
				 directionsDisplay.setDirections(response);
			 } else {
				 window.alert('Directions request failed due to ' + status);
			 }
		 });
	 }


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgoBc7ob_mDxVMzt1TpVT4hYlkh2XBXYY&callback=initMap&language=en">
    </script>
  </body>
</html>
