<?php
	include 'database.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions Service</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
<b>Start: </b>
<select id="start">
  <option value="Davis Hall, #338, Buffalo, NY 14260">North Campus Davis Hall</option>
  <option value="Student Union, Millersport Hwy, Amherst, NY 14260

">Knox Hall</option>
  <option value="Talbert Hall, Buffalo">Talbert Hall</option>
  <option value="Capen Hall
Buffalo">Capen</option>
  <option value="University Bookstore, 200 Lee Road, Buffalo, NY 14228">BookStore</option>

<option value="Chick-Mex Grill, Buffalo">Chick-Mex Grill</option>
<option value="Student Union, Buffalo">Student Union</option>
<option value="Starbucks, 520 Lee Road, Amherst, NY 14228">Starbucks in Commons</option>


</select>

<b>End: </b>
<select id="end">
  <option value="Capen Hall,Buffalo">Capen</option>
  <option value="Furnas Hall, Buffalo, NY 14260">Furnas Hall</option>
  <option value="UB Center for the Arts, 103 Center For The Arts, Buffalo, NY 14260">UB Center for the Arts</option>
  <option value="Cooke Hall, Buffalo, NY 14260">Cook Hall</option>
  <option value="Park Hall #204
Flint Rd
Buffalo, NY 14260">Park Hall</option>
  <option value="Alumni Arena, 175 Alumni Arena, Buffalo, NY 14228">Alumni Arena</option>
</select>
</div>
<div id="floating-panel" style=" left :10px; top: 55px;">
   <b>Mode of Travel: </b>
   <select id="mode">
 <option value="TRANSIT">Transit</option>
     <option value="DRIVING">Driving</option>
     <option value="BICYCLING">Bicycling</option>




   </select>
   </div>
 <div id="right-panel"></div>
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
				directionsDisplay.setPanel(document.getElementById('right-panel'));

				var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);




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
