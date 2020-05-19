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
							<a href="{{route("showAllUserQuiz")}}" class="blog_link"><i class="uil
							uil-angle-double-left"></i>Back to Quizzes</a>
						</div>
					</div>
					<div class="title126">
						<h2>{{$report->quiz->title}}</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="faq1256">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-6">
					<div class="certi_form rght1528">
						<div class="test_result_bg">
							<ul class="test_result_left">
								<li>
									<div class="result_dt">
										<i class="uil uil-check right_ans"></i>
										<p>Right<span>({{$report->correct}})</span></p>
									</div>
								</li>
								<li>
									<div class="result_dt">
										<i class="uil uil-times wrong_ans"></i>
										<p>Wrong<span>({{$report->wrong}})</span></p>
									</div>
								</li>
								<li>
									<div class="result_dt">
										<h4>{{$report->score}}</h4>
										<p>%</p>
									</div>
								</li>
							</ul>
							<div class="result_content">
								<h2>Congratulations! </h2>
								<a href="{{route("reviewQuiz",['quiz_code'=>$report->quiz_code])}}">
									<button class="_145d1"><i class="uil uil-question-circle"></i>View Attempt</button>
								</a>

							</div>
						</div>
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