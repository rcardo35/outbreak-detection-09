<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!--<link rel="shortcut icon" href="assets/img/fav.png">-->
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Education</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Fade In -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include in all files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        .form-wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }

        .req {
            color: #C00;
            font-size: 12px;
        }

        .center {
            text-align: center;
        }

        .covid-area {
            margin-top: 40px;
            margin-bottom: 500px;
        }

        .map {
            height: 100%;
        }
    </style>
</head>

<body>
<header id="header" id="home">
    <?php require_once "navbar.php"; ?>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Campus COVID Cases
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="campus-tracing.php">Campus COVID Cases</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- start campus-page Area -->
<section class="covid-area">
    <div id="map"></div>
    <script>
		var customLabel = {
			restaurant: {
				label: 'R'
			}, bar: {
				label: 'B'
			}
		};
		
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				center: new google.maps.LatLng(39.174740, -86.513806), zoom: 12
			});
			var infoWindow = new google.maps.InfoWindow;
			
			// Change this depending on the name of your PHP or XML file
			downloadUrl('create-xml.php', function (data) {
				var xml = data.responseXML;
				var markers = xml.documentElement.getElementsByTagName('markers');
				Array.prototype.forEach.call(markers, function (markerElem) {
					var id = markerElem.getAttribute('id');
					var name = markerElem.getAttribute('name');
					var address = markerElem.getAttribute('address');
					var type = markerElem.getAttribute('type');
					var point = new google.maps.LatLng(parseFloat(markerElem.getAttribute('lat')), parseFloat(markerElem.getAttribute('lng')));
					
					var infowincontent = document.createElement('div');
					var strong = document.createElement('strong');
					strong.textContent = name
					infowincontent.appendChild(strong);
					infowincontent.appendChild(document.createElement('br'));
					
					var text = document.createElement('text');
					text.textContent = address
					infowincontent.appendChild(text);
					var icon = customLabel[type] || {};
					var marker = new google.maps.Marker({
						map: map, position: point, label: icon.label
					});
					marker.addListener('click', function () {
						infoWindow.setContent(infowincontent);
						infoWindow.open(map, marker);
					});
				});
			});
		}
		
		
		function downloadUrl(url, callback) {
			var request = window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest;
			
			request.onreadystatechange = function () {
				if(request.readyState == 4) {
					request.onreadystatechange = doNothing;
					callback(request, request.status);
				}
			};
			
			request.open('GET', url, true);
			request.send(null);
		}
		
		function doNothing() {
		}
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBENGN2akXMeKnda6n-g0KA-HnHsWw540=initMap">
    </script>
    </div>

</section>
<!-- End campus-page Area -->

<!-- start footer Area -->
<?php
    require_once("footer.php");
?>
<!-- End footer Area -->

<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/easing.min.js"></script>
<script src="assets/js/hoverIntent.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.tabs.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
