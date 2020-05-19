<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Cursus - Create New Course</title>
		
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


	<div class="wrapper">
		<div class="sa4d25">
			<div class="container">
				@include("alert")
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-12">
						<div class="course_tabs_1">
							<div id="add-course-tab" class="step-app">

								<form class="step-contents" action="{{route("doCreateCourse")}}" method="post" enctype="multipart/form-data">
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
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="{{old("title")
																	}}" required>
																	<div class="badge_num">60</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="ui search focus mt-30 lbel25">
																<label>Course Subtitle*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course Subtitle." name="subtitle" data-purpose="edit-course-title" maxlength="150" id="sub[title]" value="{{old
																	("subtitle")}}" required>
																	<div class="badge_num2">150</div>
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
																				<textarea rows="5" name="description" id="summernote" placeholder="Insert your course description" required>{{old("description")}}</textarea>
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
																<option value="">Select Category</option>
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
																<input class="prompt srch_explore" type="number" placeholder="Enter amount in integers only" name="amount" data-purpose="edit-course-title" min="0" id="" value="{{old("amount")}}">

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
																		<img id="holderimage1" src="/images/courses/add_img.jpg"
																			 alt="">
																	</div>
																</div>
																<div class="view_img_right">
																	<h4>Cover Image</h4>
																	<p>Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 480x270 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
																	<div class="upload__input">
																		<div class="input-group">
																			<div class="custom-file">
																				<input onchange="readURL(this)"
																					   type="file" name="cover"
																					   class="" id="">

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
									</div>
									<br />
									<br />

									<button type="submit" class="btn btn-default steps_btn">Submit for Review</button>

								</form>

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