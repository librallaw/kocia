<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Event - LWCGI</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="/images/favicon.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="/css/vertical-responsive-menu1.min.css" rel="stylesheet">
		<link href="/css/instructor-dashboard.css" rel="stylesheet">
		<link href="/css/instructor-responsive.css" rel="stylesheet">
		<link href="/css/night-mode.css" rel="stylesheet">
		<link href="/css/jquery-steps.css" rel="stylesheet">
		<link href="/build/jquery.datetimepicker.min.css" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">

		<link href="/css/summernote.min.css" rel="stylesheet">
		<link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
		
	</head>

<body>

	@include("admin.inc.header")

	@include("admin.inc.sidebar")


	<div class="wrapper">
		<div class="sa4d25">
			<div class="container">
				@include("alert")
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-question-circle"></i> Create New Live Event</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-6">
						<div class="course_tabs_1">
							<div id="add-course-tab" class="step-app">

								<form class="step-contents col-md-12" action="{{route("doCreateEvent")}}" method="post"
									  id="question_form">
									@csrf
									<div class="step-tab-panel step-tab-info active" id="tab_step1">
										<div class="tab-from-content">

											<div class="course__form">
												<div class="general_info10">
													<div class="row">
														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>Title*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="question" maxlength="100"  value="" required>

																</div>
															</div>
														</div>

														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>Start Time*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text"
																		   name="start_time" id="datetimepicker1" maxlength="100"
																		   value="" required>

																</div>
															</div>
														</div>

														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>Video Link*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text"
																		   name="link"  id="op2" maxlength="100"
																		   value="" required>

																</div>
															</div>
														</div>



													</div>
												</div>

											</div>
										</div>
									</div>


									<br />
									<br />

									<button type="submit" class="btn btn-default steps_btn" id="submit_btn">
										Create Event
										</button>

								</form>

							</div>
                        </div>
                    </div>


					<div class="col-6">
						<div class="course_tabs_1">
							<div id="review-tab" class="step-app" style="display: none;">

								<div class="step-contents" style="max-height: 800px;overflow-x: hidden;
								   overflow: scroll">
									@csrf
									<div class="step-tab-panel step-tab-info active" id="tab_step1">
										<div class="tab-from-content" id="preview">





										</div>
									</div>


								</div>

								<br />
								<br />

								<button type="submit" class="btn btn-default steps_btn" id="create_btn"
										onclick="submit_questions()">Submit Final
									Quiz</button>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include("admin.inc.footer")
	</div>
	<!-- Body End -->

	<script src="/js/vertical-responsive-menu.min.js"></script>
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="/vendor/semantic/semantic.min.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/night-mode.js"></script>

	<script src="/js/summernote.min.js"></script>
	<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
	<script src="/js/notify.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.13/dist/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="/build/jquery.datetimepicker.full.js"></script>

	<script>

        $('#summernote').summernote({
            height: 200,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
		});

        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
	</script>







			
</body>
</html>