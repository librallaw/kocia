<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Quiz - LWCGI </title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="/images/favicon.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="/css/vertical-responsive-menu1.min.css" rel="stylesheet">
		<link href="/css/instructor-dashboard.css" rel="stylesheet">
		<link href="/css/instructor-responsive.css" rel="stylesheet">
		<link href="/css/night-mode.css" rel="stylesheet">
		<link href="/css/datepicker.min.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">

		<!-- Vendor Stylesheets -->
		<link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">		
		
	</head>

<body>


	@include("user.inc.header")
	@include("user.inc.sidebar")


	<div class="wrapper">


		<div class="_215td5" id="cr458">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title589 mb-20 text-center">
							<h2>Quiz</h2>

							<img class="line-title" src="images/line.svg" alt="">
						</div>
					</div>
					@if(count($quizzes) > 0)
						@foreach($quizzes as $quiz)
							<div class="col-lg-6">
								<div class="apply_job_link mt-30">
									<h4>{{$quiz->title}}</h4>
									<span>{{$quiz->questions->count()}} Question(s)</span>
									<div class="apply_job_link_right">
										<a href="{{route("showViewUserQuiz",['quiz_code'=>$quiz->quiz_code])}}"
										   class="career_lnk5">Take Quiz</a>
									</div>
								</div>
							</div>
						@endforeach
					@endif

								<div class="col-md-12">

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
	<script src="/js/datepicker.min.js"></script>
	<script src="/js/i18n/datepicker.en.js"></script>
	
</body>
</html>