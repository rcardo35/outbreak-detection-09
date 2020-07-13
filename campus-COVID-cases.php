<?php
    require_once("create-xml.php");
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="assets/img/fav.png">
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

.covid-area
{
    margin-top:40px;
    margin-bottom:500px;
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
<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="campus-COVID-cases.php">Campus COVID Cases</a></p>
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
    },
    bar: {
    label: 'B'
    }
    };

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
                                      center: new google.maps.LatLng(-33.863276, 151.207977),
                                      zoom: 12
                                      });
        var infoWindow = new google.maps.InfoWindow;
        
        // Change this depending on the name of your PHP or XML file
        downloadUrl('map/text.xml', function(data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName('markers');
                    Array.prototype.forEach.call(markers, function(markerElem) {
                                                 var id = markerElem.getAttribute('id');
                                                 var name = markerElem.getAttribute('name');
                                                 var address = markerElem.getAttribute('address');
                                                 var type = markerElem.getAttribute('type');
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
                                                 var icon = customLabel[type] || {};
                                                 var marker = new google.maps.Marker({
                                                                                     map: map,
                                                                                     position: point,
                                                                                     label: icon.label
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBENGN2akXMeKnda6n-g0KA-HnHsWw540&callback=initMap">
    </script>
    </div>

</section>
<!-- End campus-page Area -->



<!-- start footer Area -->
<footer class="footer-area section-gap">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h4>Top Products</h4>
<ul>
<li><a href="#">Managed Website</a></li>
<li><a href="#">Manage Reputation</a></li>
<li><a href="#">Power Tools</a></li>
<li><a href="#">Marketing Service</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h4>Quick links</h4>
<ul>
<li><a href="#">Jobs</a></li>
<li><a href="#">Brand Assets</a></li>
<li><a href="#">Investor Relations</a></li>
<li><a href="#">Terms of Service</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h4>Features</h4>
<ul>
<li><a href="#">Jobs</a></li>
<li><a href="#">Brand Assets</a></li>
<li><a href="#">Investor Relations</a></li>
<li><a href="#">Terms of Service</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h4>Resources</h4>
<ul>
<li><a href="#">Guides</a></li>
<li><a href="#">Research</a></li>
<li><a href="#">Experts</a></li>
<li><a href="#">Agencies</a></li>
</ul>
</div>
</div>
<div class="col-lg-4  col-md-6 col-sm-6">
<div class="single-footer-widget">
<h4>Newsletter</h4>
<p>Stay update with our latest</p>
<div class="" id="mc_embed_signup">
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
<div class="input-group">
<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
<div class="input-group-btn">
<button class="btn btn-default" type="submit">
<span class="lnr lnr-arrow-right"></span>
</button>
</div>
<div class="info"></div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="footer-bottom row align-items-center justify-content-between">
<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
<div class="col-lg-6 col-sm-12 footer-social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</footer>
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
