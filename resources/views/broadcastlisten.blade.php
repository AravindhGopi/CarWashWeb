<!DOCTYPE HTML>
<html lang="en">
 

  <title>Pusher Test</title>
   <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 500px;
        width: 500px;
        margin: 0;
        padding: 0;
      }
    </style>
	<?php $markers = array( 
		array( 
		 "name" => "test3", 
        "lat" => 11.020983, 
        "lon" => 76.966331, 
    ),           
    array(         
        "name" => "test1", 
        "lat" => 11.4131, 
        "lon" => 76.6960,       
    ), 
    array( 
        "name" => "test2", 
        "lat" => 9.9252, 
        "lon" => 78.1198, 
    ), 
);  ?>
   <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
  <script>

  ``  // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('c4d5467b6b712cbfa179', {
      cluster: 'ap2',
      forceTLS: true
    });

    var channel = pusher.subscribe('map-channel');
    channel.bind('map-event', function(data) {
		// console.log(data);
		var latitude=data.message.lat;
		var longitude=data.message.lon;
		initMap(latitude,longitude);
      var myJSONdata =JSON.stringify(data);
	  document.getElementById("message").innerHTML = latitude+' '+longitude;
    });
	
	function initMap(latitude,longitude) {
		alert(latitude);
		alert(longitude);
  // The location of marker
  var mark =  {lat: latitude, lng: longitude};
 
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 8, center: mark});
  
  var marker = new google.maps.Marker({position: mark, map: map});
}
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
   <div id="map"></div>
  <div id="message"></div>
  <?php $markers = array( 
		array( 
		 "name" => "test3", 
        "lat" => 11.020983, 
        "lon" => 76.966331, 
    ),           
    array(         
        "name" => "test1", 
        "lat" => 11.4131, 
        "lon" => 76.6960,       
    ), 
    array( 
        "name" => "test2", 
        "lat" => 9.9252, 
        "lon" => 78.1198, 
    ), 
);  ?>
    <script>
     
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-0nOlr19NmNDAPj7A2eHSOuz1p0zFpCQ&callback=initMap"
    async defer></script>
	</body>
</html>