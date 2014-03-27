

<!DOCTYPE html>
<html>
  <head>
    <title>Funciones de google maps :)</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
	var markersArray = [];
	var negocios = [
  ['Bondi Beach', 19.247661524094877, -103.73258093933225, 4],
  ['Coogee Beac', 19.243661324094787, -103.73554893933145, 5],
  ['Cronulla Bh', 19.244661524094597, -103.73754393933255, 3],
  ['Manly Beach', 19.245661624094817, -103.73854493933165, 2],
  ['Maroubr ech', 19.241661724094937, -103.73954693933215, 1]
];

function initialize() {
   var mapOptions = {
		    zoom: 14,
		    center: new google.maps.LatLng(19.244661324094967, -103.73454093933105)
		  };
		  var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		  setMarkers(map, negocios);

}


function setMarkers(map, locations) {
 	  for (var i = 0; i < locations.length; i++) {
	    var neg = locations[i];
	    var myLatLng = new google.maps.LatLng(neg[1], neg[2]);
	    var marker = new google.maps.Marker({
	        position: myLatLng,
	        map: map,
    	    title: neg[0],
	        zIndex: neg[3],
	        animation: google.maps.Animation.DROP
	    });
	  }
	}
	
	
function placeMarker(position, map) {
		 marker = new google.maps.Marker({
			    position: position,
			    map: map,
			    draggable:true,
			    animation: google.maps.Animation.DROP
		  });
		  markersArray.push(marker);
	}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>

