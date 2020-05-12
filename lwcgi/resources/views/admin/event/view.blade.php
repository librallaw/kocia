<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>{{$quiz->title}} - LWCGI</title>

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
					<h2 class="st_title">{{$quiz->title}} ({{$quiz->quiz_code}})</h2>
					<small class="">{{$quiz->title}} ({{$quiz->quiz_code}})</small>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="earning_steps">
						<p>Total Questions:</p>
						<h2>{{$quiz->questions->count()}}</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="earning_steps">
						<p>Total Enrolled:</p>
						<h2>1146</h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="earning_steps">
						<p>Total Participants:</p>
						<h2>95895</h2>
					</div>
				</div>

				<div class="col-md-6">
					<div class="mt-50">

						<form class="step-contents col-md-12 card card-body" action="{{route("doEditQuizTitle")}}" method="post"
							  id="question_form">
							@csrf
							<input type="hidden" value="{{$quiz->quiz_code}}" name="quiz_code">
							<div class="step-tab-panel step-tab-info active" id="tab_step1">
								<div class="tab-from-content">

									<div class="course__form">
										<div class="general_info10">
											<div class="row">
												<div class="col-md-12">
													<div class="ui search focus mt-30 lbel25">
														<label>Title*</label>
														<div class="ui left icon input swdh19">
															<input class="prompt srch_explore" type="text"
																   placeholder="Insert your course title."
																   name="title"  id="question" maxlength="100"
																   value="{{$quiz->title}}" required>

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
							<div class=" col-md-6">
								<button type="submit" class="btn btn-default steps_btn" id="">Update
									Title
								</button>
							</div>
						</form>
					</div>







				</div>


				<div class="col-md-6">
					<div class="mt-50" style="max-height: 800px;overflow: scroll;overflow-x: hidden;">

					@if(count($quiz->questions) > 0)
						<?php $x = 1; ?>

								@foreach($quiz->questions as $question)
									<form class="step-contents col-md-12 card card-body" action="{{route("doEditQuiz")}}"
										  method="post"
										  id="question_form">
										<input type="hidden" value="{{$quiz->quiz_code}}" name="quiz_code">
										<input type="hidden" value="{{$question->question_code}}"
											   name="question_code">
										@csrf
										<div class="step-tab-panel step-tab-info active" id="tab_step1">
											<div class="tab-from-content">

												<div class="course__form">
													<div class="general_info10">
														<div class="row">
															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>Question {{$x++}}</label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text"
																			   placeholder="Insert your course title."
																			   name="question"  id="question"
																			   maxlength="100"
																			   value="{{$question->question}}" required>

																	</div>
																</div>
															</div>

															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>opt1*</label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="opt1" id="op1" maxlength="100"  value="{{$question->opt1}}" required>

																	</div>
																</div>
															</div>

															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>opt2*</label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="opt2"  id="op2" maxlength="100"  value="{{$question->opt2}}" required>

																	</div>
																</div>
															</div>

															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>opt3*</label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="opt3"  id="op3" maxlength="100"  value="{{$question->opt3}}" required>

																	</div>
																</div>
															</div>

															<div class="col-md-12">
																<div class="ui search focus mt-30 lbel25">
																	<label>opt4*</label>
																	<div class="ui left icon input swdh19">
																		<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="opt4"  id="op4" maxlength="100"  value="{{$question->opt4}}" required>

																	</div>
																</div>
															</div>



															<div class=" col-md-6">
																<div class="mt-30 lbel25">
																	<label>Select Correct Answer</label>
																</div>
																<select class="form-control" name="correct" id="correct_option"
																		required>
																	<option selected value="{{$question->correct}}">{{$question
																	->correct}}</option>
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
								@endforeach

					@endif
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