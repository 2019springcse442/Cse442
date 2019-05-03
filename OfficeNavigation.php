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

<!-- navigation bar -->
<header class="header">
<a href="homepage.php" class="logo">UBStalking'-'</a>
	<form action="ProfessorProfileTemplate.php" method="post">
		<input type = "text" id = "search-bar" placeholder = "Search for your professors!" value ="" maxlength ="50"
		autocompleete = "off" onMousedown ="" onBlur = "" /><input type = "submit" id = "search-btn" value="Go!"/>
</form>
<input class="menu-btn" type="checkbox" id="menu-btn" />
<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
<ul class="menu">
	<li><a href="ScheduleMatching.php">Scheule Matching</a></li>
	<li><a href="mailto:ubstalking@gmail.com">Report Bugs</a></li>
	<li><a href="homepage.php">Home</a></li>
</ul>
</header>

<!-- page title -->
<div class="big-title">
<h1>Office Navigation</h1>
</div>

<body>

<div class="floating-panel">
<span>Start: </span>
<select id="start">
  <option value="Davis Hall, #338, Buffalo, NY 14260">North Campus Davis Hall</option>
  <option value="Student Union, Millersport Hwy, Amherst, NY 14260">Knox Hall</option>
  <option value="Talbert Hall, Buffalo">Talbert Hall</option>
  <option value="Capen Hall, Buffalo">Capen</option>
  <option value="University Bookstore, 200 Lee Road, Buffalo, NY 14228">Book Store</option>
  <option value="Chick-Mex Grill, Buffalo">Chick-Mex Grill</option>
  <option value="Student Union, Buffalo">Student Union</option>
  <option value="Starbucks, 520 Lee Road, Amherst, NY 14228">Starbucks in Commons</option>
</select>

<span>End: </span>
<select id="end">
  <option value="Capen Hall,Buffalo">Capen</option>
  <option value="Furnas Hall, Buffalo, NY 14260">Furnas Hall</option>
  <option value="UB Center for the Arts, 103 Center For The Arts, Buffalo, NY 14260">UB Center for the Arts</option>
  <option value="Cooke Hall, Buffalo, NY 14260">Cooke Hall</option>
  <option value="Park Hall #204 Flint Rd, Buffalo, NY 14260">Park Hall</option>
  <option value="Alumni Arena, 175 Alumni Arena, Buffalo, NY 14228">Alumni Arena</option>
</select>

<span>Travel Mode:</span>
<select id="mode">
  <option value="TRANSIT">Transit</option>
  <option value="DRIVING">Driving</option>
  <option value="BICYCLING">Bicycling</option>
</select>
   </div>


    <div id="map"></div>
    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 43.0008, lng: -78.7890}
        });
        directionsDisplay.setMap(map);

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

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var selectedMode = document.getElementById('mode').value;
        directionsService.route({
          origin: document.getElementById('start').value,
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgoBc7ob_mDxVMzt1TpVT4hYlkh2XBXYY&callback=initMap">
    </script>
  </body>
</html>
