<!DOCTYPE html >
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Campus COVID Cases</title>
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

<html>
<body>
<div id="map"></div>

<script>
	function initMap() {
		var map = new google.maps.Map(document.getElementById('map'), {
			center: new google.maps.LatLng(39.175470, -86.512421),
			zoom: 16
		});
		var infoWindow = new google.maps.InfoWindow;
		
		// Change this depending on the name of your PHP or XML file
		downloadUrl('create-map-xml.php', function(data) {
			var xml = data.responseXML;
			var markers = xml.documentElement.getElementsByTagName('marker');
			Array.prototype.forEach.call(markers, function(markerElem) {
				var id = markerElem.getAttribute('id');
				var name = markerElem.getAttribute('name');
				var address = markerElem.getAttribute('address');
				var point = new google.maps.LatLng(
						parseFloat(markerElem.getAttribute('lat')),
						parseFloat(markerElem.getAttribute('lng')));
				
				var infowincontent = document.createElement('div');
				var strong = document.createElement('strong');
				strong.textContent = name
				infowincontent.appendChild(strong);
				infowincontent.appendChild(document.createElement('br'));
				
				var text = document.createElement('text');
				text.textContent = address
				infowincontent.appendChild(text);
				var icon = markerElem.getAttribute('count');
				var marker = new google.maps.Marker({
					map: map,
					position: point,
					label: icon
				});
				marker.addListener('click', function() {
					infoWindow.setContent(infowincontent);
					infoWindow.open(map, marker);
				});
			});
		});
	}
	
	
	
	function downloadUrl(url, callback) {
		var request = window.ActiveXObject ?
				new ActiveXObject('Microsoft.XMLHTTP') :
				new XMLHttpRequest;
		
		request.onreadystatechange = function() {
			if (request.readyState == 4) {
				request.onreadystatechange = doNothing;
				callback(request, request.status);
			}
		};
		
		request.open('GET', url, true);
		request.send(null);
	}
	
	function doNothing() {}
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeJtqEkbeXtD4l4uc7xWTyhDER3ZM7EV4&callback=initMap">
</script>
</body>
</html>
