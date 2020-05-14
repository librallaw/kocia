<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Quiz -  LWCGI</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="/images/favicon.png">

	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
	<link href='/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="/css/vertical-responsive-menu.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
	<link href="/css/night-mode.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">

</head>

<body>
@include("user.inc.header")
<div class="wrapper _bg4586 _new89">
	<div class="_215b15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title125">

						<div class="titleright">
							<a href="{{route("showAllUserQuiz")}}" class="blog_link"><i class="uil uil-angle-double-left"></i>Back
								to
								Quizzes </a>
						</div>
					</div>
					<div class="title126">
						<h2>{{$quiz->title}}</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="faq1256">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="certi_form rght1528">
						<div class="test_timer_bg">
							<ul class="test_timer_left">
								<li>
									<div class="timer_time">
										<h4>{{$quiz->questions->count()}}</h4>
										<p>Questions</p>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-6">
					@include("alert")
					<div class="certi_form card ">
						<form class="all_ques_lest card-body" action="{{route("markQuiz")}}" method="post">
							<input type="hidden" value="{{$quiz->quiz_code}}" name="quiz_code" />
							@csrf

							@if($quiz->questions->count() > 0)
                                <?php $x = 1; ?>
								@foreach($quiz->questions as $question)
									<div class="ques_item">
										<div class="ques_title">
											<span>Question {{$x++}} :-</span>
											{{$question->question}}
										</div>
										<div class="ui form">
											<div class="grouped fields">
												<div class="field fltr-radio">
													<div class="ui radio checkbox">
														<input type="radio" name="{{$question->question_code}}"
															   tabindex="0"
															   class="hidden" value="opt1">
														<label>{{$question->opt1}}</label>
													</div>
												</div>
												<div class="field">
													<div class="ui radio checkbox">
														<input type="radio" name="{{$question->question_code}}"
															   tabindex="0" class="hidden" value="opt2">
														<label>{{$question->opt2}}</label>
													</div>
												</div>
												<div class="field">
													<div class="ui radio checkbox">
														<input type="radio" name="{{$question->question_code}}"
															   tabindex="0" class="hidden" value="opt3">
														<label>{{$question->opt3}}</label>
													</div>
												</div>
												<div class="field">
													<div class="ui radio checkbox">
														<input type="radio" name="{{$question->question_code}}"
															   tabindex="0" class="hidden" value="opt4">
														<label>{{$question->opt4}}</label>
													</div>
												</div>

											</div>
										</div>
									</div>
								@endforeach
							@else
								<div class="alert alert-info">No question set yet</div>
							@endif



								<button class="test_submit_btn" type="submit">Submit Test</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

	@include("admin.inc.footer")
</div>
<!-- Body End -->

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="/vendor/semantic/semantic.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/test-timer.js"></script>
<script src="/js/night-mode.js"></script>


</body>
</html>