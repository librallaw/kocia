<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>{{$course->title}} - LWCGI</title>
		
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
						<h2 class="st_title">{{$course->title}} ({{$course->course_code}})</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-md-4">						
						<div class="earning_steps">						
							<p>Revenue generated:</p>
							<h2>$1146.78</h2>
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
							<p>Total Completed:</p>
							<h2>95895</h2>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
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

					<div class="col-lg-8 col-md-12 ">
						<div class="mt-50">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="st_title">Course Lectures</h2>
									<button class="upload_btn" data-toggle="modal" data-target="#add_course_Modal"
											style="margin-top:10px;
">Add Lecture</button>
								</div>

							</div>
						</div>
						@if(count($lectures) > 0)
							<div class="table-responsive mt-30">
								<table class="table ucp-table earning__table">
									<thead class="thead-s">
										<tr>
											<th scope="col">Lecture Code</th>
											<th scope="col">Title</th>
											<th scope="col">Facilitator</th>
											<th scope="col">Duration</th>
											<th scope="col">Date Created</th>
										</tr>
									</thead>
									<tbody>
										@foreach($lectures as $lecture)
											<tr>
												<td>{{$lecture->lecture_code}}</td>
												<td>{{$lecture->title}}</td>
												<td>{{$lecture->facilitator}}</td>
												<td>{{$lecture->duration}}</td>
												<td>{{$lecture->created_at->diffForHumans()}}</td>
											</tr>
										@endforeach
									</tbody>
									<tfoot>
									<tr>
										<th scope="col">Lecture Code</th>
										<th scope="col">Title</th>
										<th scope="col">Facilitator</th>
										<th scope="col">Duration</th>
										<th scope="col">Date Created</th>
									</tr>
									</tfoot>
								</table>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="add_course_Modal" tabindex="-1" role="dialog"
			 aria-labelledby="exampleModalLabel"
			 aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="title"><i class="uil uil-film"></i>Add  Lecture</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="step-tab-panel step-tab-location" id="tab_step3">
							<div class="tab-from-content">

								<form class="course__form" method="post" action="{{route("doCreateLecture")}}">
									@csrf
									<div class="row">
										<div class="col-lg-12">

											<div class="view_info10">
												<div class="row">

													<div class="col-lg-12 col-md-12">
														<div class="lecture_title">
															<h4>Add Lecture</h4>
														</div>
													</div>
													<div class="col-lg-6 col-md-12">
														<div class="ui search focus mt-30 lbel25">
															<label>Lecture Title*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="Insert your lecture title." name="title" data-purpose="edit-course-title" maxlength="60" id="lecture[title]" value="{{old
																("title")}}" required>
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-md-6">
														<div class="part_input mt-30 lbel25">
															<label>Facilitator*</label>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="text" placeholder="Insert your Facilitator" name="facilitator" data-purpose="edit-course-title" maxlength="60" id="" value="{{old("facilitator")}}"
																	   required>
															</div>
														</div>
													</div>

													<div class="col-lg-12 col-md-12">
														<div class="course_des_textarea mt-30 lbel25">
															<label>Description*</label>
															<div class="course_des_bg">

																<div class="textarea_dt">
																	<div class="ui form swdh339">
																		<div class="field">
																			<textarea rows="5" name="description" class="summernote" placeholder="Insert your course part description" required>{{old("description")}}</textarea>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-md-6">
														<div class="ui search focus mt-30 lbel25">
															<label>Video URL*</label>
															<div class="ui left icon input swdh19 swdh95">
																<input class="prompt srch_explore" type="text" min="0" name="url" required placeholder="Enter video URL" value="{{old("url")}}" >
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-md-6">
														<div class="ui search focus mt-30 lbel25">
															<label>Duration*</label>
															<div class="ui left icon input swdh19 swdh55">
																<input class="prompt srch_explore" type="number" min="1" name="duration" required placeholder="" value="{{old("duration")}}" >
																<div class="badge_min">Minutes</div>
															</div>
														</div>
													</div>

													<input type="hidden" name="course_code"
														   value="{{$course->course_code}}" required/>

													<div class="col-lg-12 col-md-12">
														<div class="save_content">
															<button class="save_content_btn" type="Submit">Save Lecture</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="edit_course_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="title"><i class="uil uil-pen"></i>Edit Course </h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="step-tab-panel step-tab-location" id="tab_step3">
							<div class="tab-from-content">

								<form class="step-contents" action="{{route("doEditCourse")}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="step-tab-panel step-tab-info active" id="tab_step1">
										<div class="tab-from-content">
											<div class="title-icon">
												<h3 class="title"><i class="uil uil-info-circle"></i>General Information</h3>
											</div>
											<div class="course__form">
												<div class="general_info10">
													<div class="row">
														<div class="col-lg-6 col-md-6">
															<div class="ui search focus mt-30 lbel25">
																<label>Course Title*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]"
																		   value="{{$course->title}}" required>
																	<div class="badge_num">60</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="ui search focus mt-30 lbel25">
																<label>Course Subtitle*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course Subtitle." name="subtitle" data-purpose="edit-course-title" maxlength="60" id="sub[title]"
																		   value="{{$course->subtitle}}" required>
																	<div class="badge_num2">120</div>
																</div>
															</div>
														</div>
														<div class="col-lg-12 col-md-12">
															<div class="course_des_textarea mt-30 lbel25">
																<label>Course Description*</label>
																<div class="course_des_bg">

																	<div class="textarea_dt">
																		<div class="ui form swdh339">
																			<div class="field">
																				<textarea rows="5" name="description" class="summernote" placeholder="Insert your course description" required>{{$course->description}}</textarea>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-lg-4 col-md-6">
															<div class="mt-30 lbel25">
																<label>Course Category*</label>
															</div>
															<select class="ui hj145 dropdown cntry152 prompt
															srch_explore" name="category" required>
																<option selected
																		value="{{$course->category->id}}">{{$course
																		->category->name}}
																	</option>

																@foreach($categories as $category)
																	<option value="{{$category->id}}">{{$category->name
																	}}</option>
																@endforeach

															</select>
														</div>

													</div>
												</div>
												<div class="price_course">
													<div class="row">
														<div class="col-lg-12">
															<div class="price_title">
																<h4><i class="uil uil-dollar-sign-alt"></i>Pricing</h4>
															</div>
														</div>
														<div class="col-lg-2 col-md-3 col-sm-6">
															<div class="mt-30 lbel25">
																<label>Currency*</label>
															</div>
															<select class="ui hj145 dropdown cntry152 prompt srch_explore">
																<option selected value="NGN">NGN</option>
																<option value="USD">USD</option>

															</select>
														</div>
														<div class="col-lg-3 col-md-4 col-sm-6">
															<div class="mt-30 lbel25">
																<label>Amount*</label>
															</div>
															<div class="ui left icon input swdh19">
																<input class="prompt srch_explore" type="number" placeholder="Enter amount in integers only" name="amount" data-purpose="edit-course-title" min="0" id="" value="{{$course->amount}}">

															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="step-tab-panel step-tab-gallery" id="tab_step2">
										<div class="tab-from-content">
											<div class="title-icon">
												<h3 class="title"><i class="uil uil-image-upload"></i>View</h3>
											</div>
											<div class="course__form">
												<div class="view_info10">
													<div class="row">
														<div class="col-lg-12">
															<div class="view_all_dt">
																<div class="view_img_left">
																	<div class="view__img">
																		<img id="holderimage1" src="{{ !empty($course->cover)? "/".$course->cover: "/images/courses/add_img
								.jpg"}}"
																			 alt="">
																	</div>
																</div>
																<div class="view_img_right">
																	<h4>Cover Image</h4>
																	<p>Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
																	<div class="upload__input">
																		<div class="input-group">
																			<div class="custom-file">
																				<input onchange="readURL(this)"
																					   type="file" name="cover"
																					   class="" id="">

																			</div>
																			<input type="hidden" name="course_code"
																				   value="{{$course->course_code}}" required/>
																		</div>
																	</div>
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

									<button type="submit" class="btn btn-default steps_btn">Update</button>

								</form>

							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

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

<script>

    $('.summernote').summernote({
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
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#holderimage1')
                    .attr('src', e.target.result);
            };

            $("#resultdiv").html("");
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
			
</body>
</html>