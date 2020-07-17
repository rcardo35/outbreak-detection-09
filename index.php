<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>TechPoint University</title>

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

</head>
<body>
<header id="header" id="home">
    <?php require_once "navbar.php"; ?>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-9 col-md-12">
                <h1 class="text-uppercase">
                    Help us create a safer campus! <br><br>
                </h1>
                <p style="color: #FFFFFF; font-size: 24px">
                    By self-reporting if you have been sick, you can help us <br><br>
                    track COVID-19 cases in our campus...
                    <br><br>
                </p>
                <a href="self-reporting.php" class="primary-btn text-uppercase">Take me to the self-report page</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-feature" onclick="location.href='map.php';">
                    <div class="title">
                        <h4>Campus COVID Cases</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            <br>
                            Keep yourself updated about COVID cases in your campus
                            <br>
                            <br>
                        </p>
                    <a href="map.php">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature" onclick="location.href='self-reporting.php';">
                    <div class="title">
                        <h4>Self-Reporting</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            <br>
                            If you are a university student/employee,
                            please use this page to self-report
                            <br>
                        </p>
                        <a href="self-reporting.php">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature" onclick="location.href='testing-centers.php';">
                    <div class="title">
                        <h4>Testing Centers</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            <br>
                            Find testing centers near you, if you are experiencing symptoms
                            <br>
                            <br>
                        </p>
                        <a href="testing-centers.php">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->

<!-- Start footer Area -->
<?php require_once('footer.php'); ?>
<!-- End footer Area -->

<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.assets/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="assets/js/easing.min.js"></script>
<script src="assets/js/hoverIntent.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.tabs.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
