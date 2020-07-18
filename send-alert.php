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
                    Alert System
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- start campus-page Area -->
<section class="popular-courses-area section-gap courses-page">
    <div class="container">
        <br><br>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Test Alert Sample Demo
                        </button>
                    </h5>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>For demo purposes, please enter a valid email address that will receive the alert</b></p><br>
                        <form id="myForm" action="mail.php" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="demo-email">Email: <span class="req">  *</span> </label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="demo-email" id="demo-email" placeholder="Valid Email Required" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="building">Please select enter the building you would like to send in the alert: <span class="req">  *</span> </label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="building" id="building" placeholder="Building Name" required>
                                </div>
                            </div>
                            <br><br>
                            <div style="float: right">
                                <button class="genric-btn primary" style="background-color: #007bff; border-color: #007bff;" id="submit">Send Alert</button>
                            </div>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>
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

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

</body>
</html>
