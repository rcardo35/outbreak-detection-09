<?php
    require_once("config/database_config.php");
    require_once("controller/database_queries.php");
    
    if(!$_POST['username'] == 'admin' && !$_POST['admin'] == 'admin'){
        header("Location: health-center-login.php?noaccess=true");
    }
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

    <link rel="stylesheet" href="assets/css/datablecss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!-- Datatable -->
<!--    <link rel="stylesheet" href="assets/css/datablecss.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript">
		function openCity(evt, cityName) {
			
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for(i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for(i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		
		$(document).ready(function () {
			$('#example').DataTable();
			$('#FacultyTable').DataTable();
			$('#StaffTable').DataTable();
			document.getElementById('students').click();
		});
    </script>

    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]) {
            height: calc(1.8125rem + 6px)
        }

        #example_length {
            height: calc(1.8125rem + 6px) !important;
        }

        .center {
            text-align-last: center;
        }
        
        .modal-header{
            text-align-last: left !important;
        }

        .modal-body {
            max-height: calc(100vh - 210px);
            overflow-y: auto;
        }
        .req {
            color: #C00;
            font-size: 12px;
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
                <!--                <h1 class="text-white">-->
                <!--                    Self-Reporting-->
                <!--                </h1>-->
                <!--                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="self-reporting.php">Self-Reporting</a></p>-->
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container" style="width: 140%">
        <h1 class="center">Campus Tracing Tables</h1>
        <br>
        <div class="tab">
            <button class="tablinks" id="students" onclick="openCity(event, 'Student Table')">Student Table</button>
            <button class="tablinks" onclick="openCity(event, 'Staff Table')">Staff Table</button>
            <button class="tablinks" onclick="openCity(event, 'Faculty Table')">Faculty Table</button>
        </div>

        <div id="Student Table" class="tabcontent">
            <br>
            <h2><b style="color:darkslategray;">Student Cases</b></h2>
            <p style="font-size: 18px">This table contains student cases being reported and traced. </p>
            <br>

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Campus Housing</th>
                    <th>Campus Places</th>
                    <th>Symptomatic</th>
                    <th>Medically Confirmed</th>
                    <th>Confirmed Date</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    
                    $stmt = $conn->query("SELECT * FROM heroku_c224005b36bf596.studentcases")->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($stmt
                    
                             as $row) {
                        
                        $caseID        = $row['CaseID'];
                        $name          = $row['FullName'];
                        $phone         = $row['PhoneNumber'];
                        $email         = $row['UniversityEmail'];
                        $housing       = $row['CampusHousing'];
                        $dorm          = $row['DormBuilding'];
                        $campusPlaces  = $row['CampusPlaces'];
                        $symptoms      = $row['Symptoms'];
                        $medConfirmed  = $row['BeenMedicallyConfirmed'];
                        $confirmedDate = $row['ConfirmedDate'];
                        ?>
                        <tr>
                            <td> <?= $caseID ?> </td>
                            <td> <?= $name ?></td>
                            <td> <?= $phone ?></td>
                            <td> <?= $email ?></td>
                            <td> <?= $dorm ?></td>
                            <td> <?= $campusPlaces ?></td>
                            <td> <?= $symptoms ?></td>
                            <td> <?= $medConfirmed ?></td>
                            <td> <?= $confirmedDate ?></td>
                            <td>
                                <button type="button" class="btn btn-info edit_data" id="<?php echo $row['CaseID']; ?>"><i class="fa fa-edit"></i><br</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Campus Housing</th>
                    <th>Campus Places</th>
                    <th>Symptomatic</th>
                    <th>Medically Confirmed</th>
                    <th>Confirmed Date</th>
                    <th>Edit</th>
                </tr>
                </tfoot>
            </table>
        </div>

        <div id="Staff Table" class="tabcontent">
            <br>
            <h2><b style="color:darkslategray;">Staff Cases</b></h2>
            <p style="font-size: 18px">This table contains staff cases being reported and traced. </p>
            <br>
            <table id="StaffTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Campus Places</th>
                    <th>Symptomatic</th>
                    <th>Medically Confirmed</th>
                    <th>Confirmed Date</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Case ID</td>
                    <td>Name</td>
                    <td>Phone Number</td>
                    <td>Email</td>
                    <td>Department</td>
                    <td>Campus Places</td>
                    <td>Symptomatic</td>
                    <td>Medically Confirmed</td>
                    <td>Confirmed Date</td>
                    <td></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Campus Places</th>
                    <th>Symptomatic</th>
                    <th>Medically Confirmed</th>
                    <th>Confirmed Date</th>
                    <th>Edit</th>
                </tr>
                </tfoot>
            </table>
        </div>

        <div id="Faculty Table" class="tabcontent">
            <br>
            <h2><b style="color:darkslategray;">Faculty Cases</b></h2>
            <p style="font-size: 18px">This table contains faculty cases being reported and traced. </p>
            <br>
            <table id="FacultyTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Campus Places</th>
                    <th>Symptomatic</th>
                    <th>Medically Confirmed</th>
                    <th>Confirmed Date</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Case ID</td>
                    <td>Name</td>
                    <td>Phone Number</td>
                    <td>Email</td>
                    <td>Department</td>
                    <td>Campus Places</td>
                    <td>Symptomatic</td>
                    <td>Medically Confirmed</td>
                    <td>Confirmed Date</td>
                    <td></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Campus Places</th>
                    <th>Symptomatic</th>
                    <th>Medically Confirmed</th>
                    <th>Confirmed Date</th>
                    <th>Edit</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
<!-- End contact-page Area -->

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

<!--Edit Modal-->
<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" method="post" id="updateForm">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Update Entry</h4>
                    <button type="button" class="close req" data-dismiss="modal" aria-label="Close"><spanaria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="info_update">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Edit Modal -->


<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
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
<script src="assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>

<!--<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>


<script>
	// $(document).ready(function(){
	// 	function alignModal(){
	// 		var modalDialog = $(this).find(".modal-dialog");
	//
	// 		// Applying the top margin on modal dialog to align it vertically center
	// 		modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
	// 	}
	// 	// Align modal when it is displayed
	// 	$(".modal").on("shown.bs.modal", alignModal);
	//
	// 	// Align modal when user resize the window
	// 	$(window).on("resize", function(){
	// 		$(".modal:visible").each(alignModal);
	// 	});
	// });
	
	$(document).on('click', '.edit_data', function () {
		var caseID = $(this).attr('id');
		$.ajax({
			url: "edit-case.php",
			type: "post",
			data: {caseID: caseID},
			success: function (data) {
				$("#info_update").html(data);
				$("#editData").modal('show');
			}
		});
	});
	
	$(document).on('click', '#update', function () {
		var caseID = $(this).attr('id');
		var symptoms = [];
  
		$('#updateForm input:checkbox[name=symptoms]').each(function () {
			
			if($(this).is(":checked")) {
				symptoms.push($(this).val());
			}
		});
		symptoms = symptoms.join(',');
		$('input[name="symptoms"]').val(symptoms);
		
		$.ajax({
			url: "update-case.php", type: "post", data: $("#updateForm").serialize() + "&symptoms=" + symptoms, success: function (data) {
				alert("Record updated successfully");
				$("#editData").modal('hide');
				location.reload();
			}
		});
	});
	
 
</script>
</body>
</html>