$(document).ready(function(e) {
  

	  var defaultLatLng = new google.maps.LatLng(34.0983425, -118.3267434);
	 
	 if ( navigator.geolocation ) { 
        function success(pos) { 
            // Location found, show coordinates on map 
            drawMap(new google.maps.LatLng( 
               pos.coords.latitude, pos.coords.longitude)); 
        }
		
		function fail() { 
            drawMap(defaultLatLng);  // Show default map 
		}
		
		
		   
		   
		  navigator.geolocation.getCurrentPosition(success, fail,{enableHighAccuracy:true, timeout: 6000, maximumAge: 500000}); 
		   } else { 
        drawMap(defaultLatLng); // No geolocation support  
		   }
		 
		function drawMap(latlng) { 
	    var myOptions = { 
            zoom: 30, 
            center: latlng, 
            mapTypeId: google.maps.MapTypeId.ROADMAP 
        }; 
 
        var map = new google.maps.Map( 
            document.getElementById("mapa"), myOptions); 
 
        // Add an overlay to the map of current lat/lng 
        var marker = new google.maps.Marker({ 
            position: latlng, 
            map: map, 
            title: "tu estas aqui!" 
        });
		  
		}
		
		
	 
});
		   