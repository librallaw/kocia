<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>News - LWCGI </title>
		
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
		
		<!-- Vendor Stylesheets -->
		<link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/vendor/semantic/semantic.min.css">		
		
	</head>

<body>


	@include("admin.inc.header")
	@include("admin.inc.sidebar")
	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">			
				
				<div class="row">
					<div class="col-md-12">
						<div class="my_courses_tabs">

							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">

									@if(count($news) > 0)
										<div class="table-responsive mt-30">
											<table class="table ucp-table">
												<thead class="thead-s">
													<tr>
														<th class="text-center" scope="col">News Code</th>
														<th>Title</th>
														<th class="text-center" scope="col">Thumbnail</th>
														<th class="text-center" scope="col">Publish Date</th>
														<th class="text-center" scope="col">Category</th>
														<th class="text-center" scope="col">Status</th>
														<th class="text-center" scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach($news as $new)


														<tr>
															<td class="text-center">{{$new->news_code}}</td>
															<td>{{$new->title}}</td>
															<td><img src="{{ !empty($new->cover)? "/".$new->cover: "/images/courses/add_img.jpg"}}" /></td>
															<td class="text-center">{{$new->created_at
															->diffForHumans()
															}}</td>
															<td class="text-center">{{$new->category->name}}</td>
															<td class="text-center"><b
																		class="course_active">{{$new->status == 1
																		? "Active" : "Inactive"}}</b></td>
															<td class="text-center">
																<a href="{{route("showViewNews",
																['benx'=>$new->news_code])}}"
																   title="Edit"
																   class="gray-s"><i
																			class="uil
																 uil-eye"></i></a>
															</td>
														</tr>
													@endforeach

												</tbody>
											</table>
										</div>
									@endif
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