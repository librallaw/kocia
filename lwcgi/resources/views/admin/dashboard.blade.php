<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Dashboard - LWCGI</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		
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
		
	</head>

<body>

	@include("admin.inc.header")
	<!-- Header Start -->

	<!-- Header End -->
	<!-- Left Sidebar Start -->
	@include("admin.inc.sidebar")
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">
				@include("alert")
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-apps"></i> Admin Dashboard</h2>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Revenue</h5>
								<h2>$0</h2>
								<span class="crdbg_1">View all sales</span>
							</div>
							<div class="card_dash_right">
								<img src="/images/dashboard/achievement.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Courses</h5>
								<h2>{{count($courses)}}</h2>
								<span class="crdbg_3">View all courses</span>
							</div>
							<div class="card_dash_right">
								<img src="/images/dashboard/online-course.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Students</h5>
								<h2>{{count($users)}}</h2>
								<span class="crdbg_4">View all students</span>
							</div>
							<div class="card_dash_right">
								<img src="/images/dashboard/knowledge.svg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="card_dash">
							<div class="card_dash_left">
								<h5>Total Lectures</h5>
								<h2>{{count($lectures)}}</h2>

							</div>
							<div class="card_dash_right">
								<img src="/images/dashboard/graduation-cap.svg" alt="">
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="card_dash1">
							<div class="card_dash_left1">
								<i class="uil uil-book-alt"></i>
								<h1>Jump Into Course Creation</h1>
							</div>
							<div class="card_dash_right1">
								<button class="create_btn_dash" onclick="window.location.href = '{{route("showCreateCourse")}}';">Create Your Course</button>
							</div>
						</div>
					</div>					
				</div>
				<div class="row">
					@if(count($courses) > 0)
						<div class="col-xl-4 col-lg-6 col-md-6">
							<div class="section3125 mt-50">
								<h4 class="item_title">Latest Courses</h4>
								<div class="la5lo1">
									<div class="owl-carousel courses_performance owl-theme">
										@foreach($courses->take(3) as $course)
											<div class="item">
												<div class="fcrse_1">
													<a href="{{route("showViewCourse",['code'=>$course->course_code])}}"
													   class="fcrse_img">
														<img src="{{ !empty($course->cover)? "/".$course->cover: "/images/courses/add_img.jpg"}}" alt="">
														<div class="course-overlay"></div>
													</a>
													<div class="fcrse_content">

														<a href="{{route("showViewCourse",
														['code'=>$course->course_code])}}"
														   class="crsedt145">{{$course->title}}</a>
														<div class="allvperf">
															<div class="crse-perf-left">Category</div>
															<div class="crse-perf-right">{{$course->category->name
															}}</div>
														</div>
														<div class="allvperf">
															<div class="crse-perf-left">Lectures</div>
															<div class="crse-perf-right">{{$course->lectures->count()
															}}</div>
														</div>
														<div class="allvperf">
															<div class="crse-perf-left">Date Created</div>
															<div class="crse-perf-right">{{$course->created_at
															->diffForHumans()
															}}</div>
														</div>

														<div class="auth1lnkprce">
															<a href="{{route("showViewCourse",['code'=>$course->course_code])}}" class="cr1fot50">Go to course</a>

														</div>
													</div>
												</div>
											</div>
										@endforeach


									</div>
								</div>
							</div>
						</div>

					@endif
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="section3125 mt-50">
							<h4 class="item_title">News</h4>
							<div class="la5lo1">
								<div class="owl-carousel edututs_news owl-theme">
									<div class="item">
										<div class="fcrse_1">
											<a href="/instructor_dashboard.html#" class="fcrse_img">
												<img src="/images/courses/news-1.jpg" alt="">												
											</a>
											<div class="fcrse_content">
												<a href="/instructor_dashboard.html#" class="crsedt145 mt-15">COVID-19 Updates & Resources</a>
												<p class="news_des45">See the latest updates to coronavirus-related content, including changes to monetization, and access new Creator support resources</p>
												<div class="auth1lnkprce">
													<a href="/instructor_dashboard.html#" class="cr1fot50">Learn More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1">
											<a href="/instructor_dashboard.html#" class="fcrse_img">
												<img src="/images/courses/news-2.jpg" alt="">												
											</a>
											<div class="fcrse_content">
												<a href="/instructor_dashboard.html#" class="crsedt145 mt-15">Watch: Edututs+ interview Mr. Joginder</a>
												<p class="news_des45">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac eleifend ante. Duis ac pulvinar felis. Sed a nibh ligula. Mauris eget tortor id mauris tristique accumsan.</p>
												<div class="auth1lnkprce">
													<a href="/instructor_dashboard.html#" class="cr1fot50">Watch Now</a>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="fcrse_1">
											<a href="/instructor_dashboard.html#" class="fcrse_img">
												<img src="/images/courses/news-1.jpg" alt="">												
											</a>
											<div class="fcrse_content">
												<a href="/instructor_dashboard.html#" class="crsedt145 mt-15">COVID-19 Updates - April 7</a>
												<p class="news_des45">Ut porttitor mi vel orci cursus, nec elementum neque malesuada. Phasellus imperdiet quam gravida pharetra aliquet. Integer vel ligula eget nisl dignissim hendrerit.</p>
												<div class="auth1lnkprce">
													<a href="/instructor_dashboard.html#" class="cr1fot50">Learn More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="section3125 mt-50">
							<h4 class="item_title">Profile Analytics</h4>
							<div class="la5lo1">	
								<div class="fcrse_1">
									<div class="fcrse_content">
										<h6 class="crsedt8145">Current subscribers</h6>
										<h3 class="subcribe_title">856</h3>
										<div class="allvperf">
											<div class="crse-perf-left">View</div>
											<div class="crse-perf-right">17k<span class="analyics_pr"><i class="uil uil-arrow-to-bottom"></i>75%</span></div>
										</div>
										<div class="allvperf">
											<div class="crse-perf-left">Purchased<span class="per_text">(per hour)</span></div>
											<div class="crse-perf-right">1<span class="analyics_pr"><i class="uil uil-top-arrow-from-top"></i>100%</span></div>
										</div>
										<div class="allvperf">
											<div class="crse-perf-left">Enroll<span class="per_text">(per hour)</span></div>
											<div class="crse-perf-right">50<span class="analyics_pr"><i class="uil uil-top-arrow-from-top"></i>70%</span></div>
										</div> 
										<div class="auth1lnkprce">
											<a href="/instructor_dashboard.html#" class="cr1fot50">Go to profile analytics</a>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="section3125 mt-50">
							<h4 class="item_title">Submit Courses</h4>
							<div class="la5lo1">	
								<div class="fcrse_1">
									<div class="fcrse_content">
										<div class="upcming_card">
											<a href="/instructor_dashboard.html#" class="crsedt145">The Complete JavaScript Course 2020: Build Real Projects!<span class="pndng_145">Pending</span></a>
											<p class="submit-course">Submitted<span>1 days ago</span></p>
											<a href="/instructor_dashboard.html#" class="delete_link10">Delete</a>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="section3125 mt-50">
							<h4 class="item_title">What's new in Edututs+</h4>
							<div class="la5lo1">	
								<div class="fcrse_1">
									<div class="fcrse_content">
										<a href="/instructor_dashboard.html#" class="new_links10">Improved performance on Studio Dashboard</a>
										<a href="/instructor_dashboard.html#" class="new_links10">See more Dashboard updates</a>
										<a href="/instructor_dashboard.html#" class="new_links10">See issues-at-glance for Live</a>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer mt-40">
			<div class="container-fluid">
				<div class="row">					
					<div class="col-lg-12">
						<div class="item_f1">
							<a href="/terms_of_use.html">Copyright Policy</a>
							<a href="/terms_of_use.html">Terms</a>
							<a href="/terms_of_use.html">Privacy Policy</a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="footer_bottm">
							<div class="row">
								<div class="col-md-6">
									<ul class="fotb_left">
										<li>
											<a href="/index.html">
												<div class="footer_logo">
													<img src="/images/logo1.svg" alt="">
												</div>
											</a>
										</li>
										<li>
											<p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="edu_social_links">
										<a href="/instructor_dashboard.html#"><i class="fab fa-facebook-f"></i></a>
										<a href="/instructor_dashboard.html#"><i class="fab fa-twitter"></i></a>
										<a href="/instructor_dashboard.html#"><i class="fab fa-google-plus-g"></i></a>
										<a href="/instructor_dashboard.html#"><i class="fab fa-linkedin-in"></i></a>
										<a href="/instructor_dashboard.html#"><i class="fab fa-instagram"></i></a>
										<a href="/instructor_dashboard.html#"><i class="fab fa-youtube"></i></a>
										<a href="/instructor_dashboard.html#"><i class="fab fa-pinterest-p"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Body End -->

	<script src="/js/vertical-responsive-menu.min.js"></script>
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="/vendor/semantic/semantic.min.js"></script>
	<script src="/js/custom1.js"></script>
	<script src="/js/night-mode.js"></script>
	
</body>
</html>