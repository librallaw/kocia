<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>{{$event->title}} - LWCGI</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="/images/favicon.png">

	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
	<link href='/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="/css/vertical-responsive-menu1.min.css" rel="stylesheet">
	<link href="/css/instructor-dashboard.css" rel="stylesheet">
	<link href="/css/instructor-responsive.css" rel="stylesheet">
	<link href="/css/night-mode.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">

	<link href="/css/summernote.min.css" rel="stylesheet">

</head>

<body>
@include("admin.inc.header")
@include("admin.inc.sidebar")

<!-- Header End -->
<!-- Left Sidebar Start -->

<!-- Left Sidebar End -->
<!-- Body Start -->
<div class="wrapper">
	<div class="sa4d25">
		<div class="container-fluid">
			@include("alert")
			<div class="row">
				<div class="col-lg-12">
					<h2 class="st_title">{{$event->title}} ({{$event->event_code}})</h2>
					<small class="">{{$event->title}} ({{$event->event_code}})</small>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="earning_steps">
						<p>Total Attendees:</p>
						<h2>100</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="earning_steps">
						<p>Total Comments:</p>
						<h2>1146</h2>
					</div>
				</div>
				</div>

			<div class="row">

				<div class="col-md-4">

						<div class="top_countries mt-50">
							<div class="top_countries_title">
								<h2>Course Image</h2>
							</div>
							<div class="country_list">

								<img src="{{ !empty($course->cover)? "/".$course->cover: "/images/courses/add_img
								.jpg"}}" style="width:100%" />

							</div>
						</div>



						<button class="upload_btn" data-toggle="modal" data-target="#edit_course_Modal" style="margin-top:10px;">Edit
							Course</button>







				</div>


				<div class="col-md-6">
					<div class="mt-50" style="">


									<form class="step-contents col-md-12 card card-body" action="{{route
									("doEditEvent")}}"
										  method="post"
										  id="question_form">
										<input type="hidden" value="{{$event->event_code}}" name="event_code">

										@csrf
										<div class="step-tab-panel step-tab-info active" id="tab_step1">
											<div class="tab-from-content">

												<div class="course__form">
													<div class="general_info10">
														<div class="row">
															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>Question /label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text"
																			   placeholder="Insert your course title."
																			   name="question"  id="question"
																			   maxlength="100"
																			   value="{{$event->question}}" required>

																	</div>
																</div>
															</div>

															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>opt1*</label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="opt1" id="op1" maxlength="100"  value="{{$event->start_time}}" required>

																	</div>
																</div>
															</div>

															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>opt2*</label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="opt2"  id="op2" maxlength="100"  value="{{$event->link}}" required>

																	</div>
																</div>
															</div>



															<div class=" col-md-6">
																<div class="mt-30 lbel25">
																	<label>Select Correct Answer</label>
																</div>
																<select class="form-control" name="correct" id="correct_option"
																		required>

																	<option value="opt1">Opt1 </option>
																	<option value="opt2">Opt2</option>
																	<option value="opt3">Opt3</option>
																	<option value="opt4">Opt4</option>

																</select>
															</div>

														</div>
													</div>

												</div>
											</div>
										</div>


										<br />
										<br />

										<div class=" col-md-6">
											<button type="submit" class="btn btn-default steps_btn" id="">Update
												Question
											</button>
										</div>

									</form>
							<br />
							<br />

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
<script src="/js/custom1.js"></script>
<script src="/js/night-mode.js"></script>
<script src="/js/summernote.min.js"></script>



</body>
</html>