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
    <link rel="stylesheet" href="assets/css/panelcss.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script type="text/javascript">
		function showStudentQuestions() {
			$("#student_questions").fadeIn();
		}
		
		function hideStudentQuestions() {
			$("#student_questions").fadeOut();
		}
		
		function showDormQuestion() {
			$("#dorm_question").fadeIn();
		}
		
		function hideDormQuestion() {
			$("#dorm_question").fadeOut();
		}
		
		function showNonStudent() {
			$("#nonStudent_questions").fadeIn();
		}
		
		function hideNonStudent() {
			$("#nonStudent_questions").fadeOut();
		}
		
		function showExposure() {
			$("#exposure_questions").fadeIn();
		}
		
		function hideExposure() {
			$("#exposure_questions").fadeOut();
		}
		
		function showEval() {
			$("#evaluated_questions").fadeIn();
		}
		
		function hideEval() {
			$("#evaluated_questions").fadeOut();
		}
		
		$(document).ready(function () {
			
			$('#exp_date').datepicker({
				changeMonth: true, changeYear: true, weekStart: 1,
			});
		});
		
		$('#submit').click(function () {
			console.log("entered method");
			checked = $("input[type=checkbox]:checked").length;
			
			if($("input[type=checkbox]:checked").length > 0) {
				alert("You must check at least one checkbox.");
				return false;
			}
			
		});
		
		function toggleSymptoms() {
			var noSymptoms = document.getElementById("no_symptoms");
			
			var symp1 = document.getElementById("fever");
			var symp2 = document.getElementById("cough");
			var symp3 = document.getElementById("shortness_of_breath");
			
			if(noSymptoms.checked) {
				symp1.disabled = true;
				symp2.disabled = true;
				symp3.disabled = true;
			} else {
				symp1.disabled = false;
				symp2.disabled = false;
				symp3.disabled = false;
			}
		}
		
		$('.optionBox input:checkbox').click(function () {
			var $inputs = $('.optionBox input:checkbox');
			if($(this).value() === "No Symptoms") {
				console.log($(this).value());
				if($(this).is(':checked')) {  // <-- check if clicked box is currently checked
					$inputs.not(this).prop('disabled', true); // <-- disable all but checked checkbox
				} else {  //<-- if checkbox was unchecked
					$inputs.prop('disabled', false); // <-- enable all checkboxes
				}
			}
		});

    </script>

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
                <h2 class="text-white">
                    Self-Reporting
                </h2>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="self-reporting.php">Self-Reporting</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container" align="center">
        <div class="panel panel-info" style="width: 90%">
            <div class="panel-heading" style="padding: 25px"><h3><b style="color: black;">Confidential Health Form</b></h3></div>
            <div class="panel-body" align="left" style="color: #000000">
                <p>
                    Please be assured your information will be kept confidential and will not be shared with anyone without your explicit permission. Information submitted to this form will be used to
                    determine case tracing on campus... Please complete the following questions.... Thank you for taking the time to providing us with this information in order to help stop the spread
                    of COVID-19 in our campus...</p>

                <p class="req">All fields marked with an asterisk (*) are required.</p>
                <br>
                <form id="myForm" action="confirm-self-report.php" method="post">

                    <div class="form-group row row" id="name">
                        <div class="col-sm-5">
                            <label for="name">Full Name: <span class="req">*</span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group row" id="phone_number">
                        <div class="col-sm-5">
                            <label for="phone_number">Phone Number: <span class="req">*</span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="phone_number" id="phone_number" required>
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group row" id="email">
                        <div class="col-sm-5">
                            <label for="email">University Email: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group row" id="univ_status">
                        <div class="col-sm-5">
                            <label for="univ_status">Please select your university status: <span class="req"> * </span> </label>
                        </div>
                        <div class="col-sm-7">
                            <label for="student" class="radio-inline"><input type="radio" name="status" id="status" value="Student" onclick="showStudentQuestions(); hideNonStudent();" required/>
                                Student &emsp;
                            </label><br>
                            <label for="Staff" class="radio-inline"><input type="radio" name="status" id="status" value="Staff" onclick="hideStudentQuestions(); showNonStudent(); hideDormQuestion()"/>
                                Staff &emsp;
                            </label><br>
                            <label for="Faculty" class="radio-inline"><input type="radio" name="status" id="status" value="Faculty "
                                                                             onclick="hideStudentQuestions(); showNonStudent(); hideDormQuestion();"> Faculty &emsp;
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="form-group row" style="display: none" id="student_questions">
                        <div class="col-sm-5">
                            <label for="housing">Do you live in on-campus housing?: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <label for="yes" class="radio-inline"><input type="radio" name="housing" id="housing" value="Yes" onclick="showDormQuestion();"/> Yes &emsp; </label><br>
                            <label for="no" class="radio-inline"><input type="radio" name="housing" id="housing" value="No" onclick="hideDormQuestion();"/> No &emsp;</label><br>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="form-group row" style="display: none" id="dorm_question">
                        <div class="col-sm-5">
                            <label for="dorm">Please select your building: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <select name="dorm" id="dorm" class="form-control" style="height: 34px">
                                <option value="Building 1">Building 1</option>
                                <option value="Building 2">Building 2</option>
                                <option value="Building 3">Building 3</option>
                                <option value="Building 4">Building 4</option>
                            </select>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="form-group row" style="display: none" id="nonStudent_questions">
                        <div class="col-sm-5">
                            <label for="department">Department you work at: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="department" id="department">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-sm-5">
                            <label for="building">Building you work at: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="building" id="building">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-sm-5">
                            <label for="supervisor_name">Supervisor name: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="supervisor_name" id="supervisor_name">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-sm-5">
                            <label for="supervisor_phone">Supervisor phone number: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="supervisor_phone" id="supervisor_phone">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-sm-5">
                            <label for="supervisor_email">Supervisor email: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" name="supervisor_email" id="supervisor_email">
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label for="dorm">Places in campus where you have been: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <select name="campus_places" id="campus_places" class="form-control" style="height: 100px; font-size: 14px" multiple>
                                <option value="Place 1">Place 1</option>
                                <option value="Place 2">Place 2</option>
                                <option value="Place 3">Place 3</option>
                                <option value="Place 4">Place 4</option>
                            </select>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label for="exposure">Have you had direct exposure (that you are aware of): <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <label for="yes" class="radio-inline"><input type="radio" name="exposure" id="exposure" value="Yes" onclick="showExposure();" required/> Yes &emsp;</label><br>
                            <label for="no" class="radio-inline"><input type="radio" name="exposure" id="exposure" value="No" onclick="hideExposure();"/> No &emsp;</label><br>
                            <label for="unsure" class="radio-inline"><input type="radio" name="exposure" id="exposure" value="Unsure" onclick="showExposure();"/> Unsure &emsp;</label>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="form-group row" style="display: none" id="exposure_questions">
                        <div class="col-sm-5">
                            <label for="exposure_quest">Please provide a brief description of your most recent exposure: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="exposure_desc" id="exposure_desc">
                        </div>
                        <br><br><br>
                        <div class="col-sm-5">
                            <label for="exposure_quest">Please provide the date you were exposed: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group date">
                                <input type="text" class="form-control" name="exp_date" id="exp_date" placeholder="DD/MM/YYYY"/>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label for="symptoms">Are currently experiencing any of the following symptoms (Select all that apply): <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-4">

                            <input type="checkbox" name="symptoms" id="no_symptoms" value="No Symptoms" onclick="toggleSymptoms();">
                            <label for="no_symptoms"> No Symptoms
                            </label><br>

                            <input type="checkbox" name="symptoms" id="fever" value="Fever">
                            <label for="fever"> Fever
                            </label><br>

                            <input type="checkbox" name="symptoms" id="cough" value="Cough">
                            <label for="cough"> Cough
                            </label><br>

                            <input type="checkbox" name="symptoms" id="shortness_of_breath" value="Shortness of Breath">
                            <label for="shortness_of_breath"> Shortness of Breath
                            </label><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label for="exposure">Have you been medically evaluated? <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <label for="yes" class="radio-inline"><input type="radio" name="evaluated" id="evaluated" value="Yes" onclick="showEval()"> Yes </label><br>
                            <label for="no" class="radio-inline"><input type="radio" name="evaluated" id="evaluated" value="No" onclick="hideEval()"> No </label>
                        </div>
                        <br><br>
                    </div>

                    <div class="form-group row" style="display: none" id="evaluated_questions">
                        <div class="col-sm-5">
                            <label for="eval_date">Please provide the date you evaluated: <span class="req"> * </span></label>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group date">
                                <input type="text" class="form-control" name="eval_date" id="eval_date" placeholder="DD/MM/YYYY"/>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="center">
                        <button class="genric-btn primary" id="submit">Submit Survey</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--    </div>-->
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
<!--<script src="assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>-->
</body>
</html>