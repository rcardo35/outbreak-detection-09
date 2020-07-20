<?php
    require_once("config/database_config.php");
?>

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
    <title>Campus Tracing</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!-- CSS -->
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
    <link rel="stylesheet" href="assets/css/datablecss.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
		$(document).ready(function () {
			$('#example').DataTable({
				scrollX: true,
			});
			
		});
    </script>

    <style>
        iframe {
            border: none;
            width: 125%;
            height: 500px;
            position: relative;
            left: -120px;
        }

        @media (min-width: 1024px) {
            .content_viewport {
                border: 0px none;
                height: 900px;
                width: 100%;
            }
        }

        @media (max-width: 1023px) {
            .content_viewport {
                border: 0px none;
                height: 900px;
                width: 100%;
            }
        }

        @media (min-width: 768px) {
            .content_viewport {
                border: 0px none;
                height: 900px;
                width: 100%;
            }
        }
    </style>

</head>
<body>
<header id="header" id="home">
    <?php require_once "navbar.php"; ?>
</header>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <br>
                <br>
                <h1 class="text-white">
                    Campus COVID-19 Cases Map
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- start campus-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h3 class="mb-10">Find the latest cases confirmed in campus by building: </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="single-popular-carusel col-lg-6 col-md-8">
                <div class="thumb-wrap relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                    </div>
                </div>
                <div class="details">
                    <iframe src="map.php" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <br>
            <br>
            <div class="single-popular-carusel col-lg-6 col-md-7" style="padding-left: 25px">
                <table id="example" class="table table-striped table-bordered display nowrap" style="width:100%;">
                    <thead>
                    <tr>
                        <th>Campus Building</th>
                        <th>Confirmed Case Date:</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $stmt = $conn->query("SELECT CampusPlaces, ConfirmedDate FROM heroku_c224005b36bf596.studentcases WHERE BeenMedicallyConfirmed = 'Yes'")->fetchAll(PDO::FETCH_ASSOC);
                        
                        foreach ($stmt as $row) {
                            $name = $row['CampusPlaces'];
                            $date = $row['ConfirmedDate'];
                            ?>
                            <tr>
                                <td> <?= $name ?> </td>
                                <td> <?= $date ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
