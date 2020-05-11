<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>{{$news->title}} - LWCGI</title>
		
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
						<h2 class="st_title">{{$news->title}} ({{$news->news_code}})</h2>
					</div>					
				</div>

				<div class="row">

					<div class="col-lg-8 col-md-8">
						<div class="step-tab-panel step-tab-location" id="tab_step3">
							<div class="tab-from-content">

								<form class="step-contents" action="{{route("doEditNews")}}" method="post"
									  enctype="multipart/form-data">
									@csrf
									<div class="step-tab-panel step-tab-info active" id="tab_step1">
										<div class="tab-from-content">

											<div class="course__form">
												<div class="general_info10">
													<div class="row">
														<div class="col-lg-6 col-md-6">
															<div class="ui search focus mt-30 lbel25">
																<label>News Title*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]"
																		   value="{{$news->title}}" required>
																	<div class="badge_num">60</div>
																</div>
															</div>
														</div>

														<div class="col-lg-12 col-md-12">
															<div class="course_des_textarea mt-30 lbel25">
																<label>News Content*</label>
																<div class="course_des_bg">

																	<div class="textarea_dt">
																		<div class="ui form swdh339">
																			<div class="field">
																				<textarea rows="5" name="news_content" class="summernote" placeholder="Insert your course description" required>{{$news->content}}</textarea>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-lg-4 col-md-6">
															<div class="mt-30 lbel25">
																<label>News Category*</label>
															</div>
															<select class="ui hj145 dropdown cntry152 prompt
															srch_explore" name="category" required>
																<option selected
																		value="{{$news->category->id}}">{{$news
																		->category->name}}</option>
																@foreach($categories as $category)
																	<option value="{{$category->id}}">{{$category->name
																	}}</option>
																@endforeach
															</select>
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
																		<img id="holderimage1" src="{{ !empty($news->cover)? "/".$news->cover: "/images/courses/add_img.jpg"}}"
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
																			<input type="hidden" name="news_code"
																				   value="{{$news->news_code}}"
																				   required/>
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