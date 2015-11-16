# website-create-PART-1
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 80%;
      }


    </style>
  </head>
  <body>
    <div id="floating-panel">
    <b>Start: </b>
    <select id="start" onchange="calcRoute();">
      <option value=“NDLS”>Delhi</option>
      <option value=“DDN”>Dehradun</option>
      <option value=“BRC”>Vadodara</option>
      <option value=“HWH”>Kolkata</option>
      <option value=“JP”>Jaipur</option>
      <option value=“JU”>Jodhpur</option>
      <option value=“GHY”>Guwahati</option>
      <option value=“JHS”>Jhansi</option>
      <option value=“BCT”>Mumbai</option>
      <option value=“SBC“>Bangalore</option>
      <option value=“HYB“>Hyderabad</option>
      <option value=“CNB”>Kanpur</option>
      <option value=“KGM”>Kathgodam</option>
      <option value=“PUNE”>Pune</option>
    </select>
    <b>End: </b>
    <select id="end" onchange="calcRoute();">
      <option value=“CNB”>Kanpur</option>
      <option value="HYB”>Hyderabad</option>
      <option value=“SBC”>Bangalore</option>
      <option value="JHS”>Jhansi</option>
      <option value=“BCT”>Mumbai</option>
      <option value=“GHY”>Guwahati</option>
      <option value=“JP”>Jaipur</option>
      <option value=“JU”>Jodhpur</option>
      <option value=“HWH”>Kolkata</option>
      <option value=“MS”>Chennai</option>
      <option value=“DDN”>Dehradun</option>
      <option value=“NDLS”>Delhi</option>
      <option value=“PUNE”>Pune</option>
      <option value=“KGM”>Kathgodam</option>
    </select>
    </div>
    <div id="map"></div>
    <script>
function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: {lat: 28.6100, lng: 77.2300}
  });
  directionsDisplay.setMap(map);

  var onChangeHandler = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
  document.getElementById('start').addEventListener('change', onChangeHandler);
  document.getElementById('end').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) 
{
  directionsService.route({
    origin: document.getElementById('start').value,
    destination: document.getElementById('end').value,
    travelMode: google.maps.TravelMode.TRANSIT,
    transitOptions:{
       arrivalTime: new Date,
       departureTime: new Date,
       modes: [google.maps.TransitMode.TRAIN],
      },
 }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8AC2nSNw80fkUTVwKgYqLJHvDeont9p0&signed_in=true&callback=initMap"
        async defer></script>
  </body>
</html>
