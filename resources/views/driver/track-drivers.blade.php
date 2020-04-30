@extends('layouts.app')
    @section('content')
	
    <div class="container">
		<div class="card">
		<div class="row">
		<div class="col-md-4">
		<h3>Driver's Tracking</h3>
		</div><div class="col-md-4"><label class="label"for="driverlist">Select:</label>
		<select name="drivers"class="form-control selecteddriver"id="driverlist">
		<option value="all">All</option>
		@foreach($drivers as $driv)
		<option value="{{$driv->id}}">{{$driv->name}}</option>
		@endforeach
		</select>
		 <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
		</div><div class="col-md-4">
			
	
		</div>
		</div>		
		</div>
		<div class="card">
		<div style="width: 1000px; height: 500px;">
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
    </style>
  </head>
  
  <body>
    <div id="map"></div>
	
</div>
		</div>
		<div class="card">
				
    </div>
	<div class="card">
		
    </div>
    
	
	</div>
	
     <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
  <script>
$(window).on("load", function () {
   var selected_option = "all"; 
   var token = $("#token").val(); 
		$.ajax({          
			url: "{{URL::to('getdriver-location')}}",  
			type: "POST",
			data: {_token:token,selected_option:selected_option},
			dataType: 'json' ,  
			success:function(data) 
			{
			// console.log(data);
			initMap(data);
											
			}	 
			});
	});
	
  ``  // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;
	 
    // var pusher = new Pusher('c4d5467b6b712cbfa179', {
      // cluster: 'ap2',
      // forceTLS: true
    // });

    // var channel = pusher.subscribe('map-channel');
    // channel.bind('map-event', function(data) {
		// console.log(data);
		// var latitude=data.message.lat;
		// var longitude=data.message.lon;
	
      // var myJSONdata =JSON.stringify(data);
	  // document.getElementById("message").innerHTML = latitude+' '+longitude;
    // });
	
$(document).ready(function() {
	
  $("select.selecteddriver").change(function() {
	
    var selected_option = $(".selecteddriver option:selected").val();

  var token = $("#token").val();
 
 $.ajax({
     
     
	 url: "{{URL::to('getdriver-location')}}",  
     type: "POST",
	 data: {_token:token,selected_option:selected_option},
	 dataType: 'json' ,  
	 success:function(data) {
	 console.log(data);
      initMap(data);        
				
				
            }	 
   });
   });
   });
      var map;
      function initMap(data) {
		 

		  // console.log(data);
		
		var markerlist = [];
    for (var i=0;i<data.length;i++) {
        var obj = data[i];
		// alert(obj);
        markerlist[i] = new Array();
        for(var key in obj) {
            markerlist[i].push(obj[key]);
        }
    }
		 
		
	  var markers =markerlist; 
	  var myLatLng = {lat: 11.0389, lng: 76.9796};
	  
         var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: myLatLng
  });
	for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        // bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });                
    }
  
      }

// AJAX METHODS


  </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-0nOlr19NmNDAPj7A2eHSOuz1p0zFpCQ&callback=initMap"
    async defer></script>
    @endsection
