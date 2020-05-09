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
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-12">
						<div class="course_tabs_1">
							<div id="add-course-tab" class="step-app">

								<form class="step-contents">
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
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">
																	<div class="badge_num">60</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="ui search focus mt-30 lbel25">
																<label>Course Subtitle*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course Subtitle." name="subtitle" data-purpose="edit-course-title" maxlength="60" id="sub[title]" value="">
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
																				<textarea rows="5" name="description" id="summernote" placeholder="Insert your course description"></textarea>
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
															srch_explore" required>
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
																<input class="prompt srch_explore" type="number" placeholder="Enter amount in integers only" name="subtitle" data-purpose="edit-course-title" min="0" id="sub[title]" value="">

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
																		<img src="/images/courses/add_img.jpg" alt="">
																	</div>
																</div>
																<div class="view_img_right">
																	<h4>Cover Image</h4>
																	<p>Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
																	<div class="upload__input">
																		<div class="input-group">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="inputGroupFile04">
																				<label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="view_all_dt">
																<div class="view_img_left">
																	<div class="view__img">
																		<img src="/images/courses/add_video.jpg" alt="">
																	</div>
																</div>
																<div class="view_img_right">
																	<h4>Promotional Video</h4>
																	<p>Students who watch a well-made promo video are 5X more likely to enroll in your course. We've seen that statistic go up to 10X for exceptionally awesome videos. Learn how to make yours awesome!</p>
																	<div class="upload__input">
																		<div class="input-group">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="inputGroupFile05">
																				<label class="custom-file-label" for="inputGroupFile05">No Choose file</label>
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

									 <div class="step-tab-panel step-tab-location" id="tab_step3">
										<div class="tab-from-content">
											<div class="title-icon">
												<h3 class="title"><i class="uil uil-film"></i>Course Content</h3>
											</div>
											<div class="course__form">
												<div class="row">
													<div class="col-lg-12">
														<div class="extra_info">
															<h4 class="part__title">New Course Content</h4>
														</div>
														<div class="view_info10">
															<div class="row">
																<div class="col-lg-12 col-md-12">
																	<div class="ui search focus mt-30 lbel25">
																		<label>Course Content Title*</label>
																		<div class="ui left icon input swdh19">
																			<input class="prompt srch_explore" type="text" placeholder="Insert your course content title." name="title" data-purpose="edit-course-title" maxlength="60" id="Content[title]" value="">
																		</div>
																	</div>
																</div>
																<div class="col-lg-12 col-md-12">
																	<div class="lecture_title">
																		<h4>Add Lecture</h4>
																	</div>
																</div>
																<div class="col-lg-4 col-md-12">
																	<div class="ui search focus mt-30 lbel25">
																		<label>Lecture Title*</label>
																		<div class="ui left icon input swdh19">
																			<input class="prompt srch_explore" type="text" placeholder="Insert your lecture title." name="title" data-purpose="edit-course-title" maxlength="60" id="lecture[title]" value="">
																		</div>
																	</div>
																</div>
																<div class="col-lg-4 col-md-6">
																	<div class="part_input mt-30 lbel25">
																		<label>File*</label>
																		<div class="input-group">
																			<div class="custom-file">
																				<input type="file" class="custom-file-input" id="inputGroupFile06">
																				<label class="custom-file-label" for="inputGroupFile06">No Choose file - (Pdf, Video)</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-4 col-md-6">
																	<div class="ui search focus mt-30 lbel25">
																		<label>Sort</label>
																		<div class="ui left icon input swdh19">
																			<input class="prompt srch_explore" type="number" name="sort" min="0" max="100" placeholder="0">
																		</div>
																	</div>
																</div>
																<div class="col-lg-12 col-md-12">
																	<div class="course_des_textarea mt-30 lbel25">
																		<label>Description*</label>
																		<div class="course_des_bg">
																			<ul class="course_des_ttle">
																				<li><a href="/create_new_course.html#"><i class="uil uil-bold"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-italic"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-list-ul"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-left-to-right-text-direction"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-right-to-left-text-direction"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-list-ui-alt"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-link"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-text-size"></i></a></li>
																				<li><a href="/create_new_course.html#"><i class="uil uil-text"></i></a></li>
																			</ul>
																			<div class="textarea_dt">
																				<div class="ui form swdh339">
																					<div class="field">
																						<textarea rows="5" name="description" id="id_part_description" placeholder="Insert your course part description"></textarea>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-5 col-md-6">
																	<div class="ui search focus mt-30 lbel25">
																		<label>Volume*</label>
																		<div class="ui left icon input swdh19 swdh95">
																			<input class="prompt srch_explore" type="number" min="0" name="size" required="" placeholder="0">
																			<div class="badge_mb">MB</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-5 col-md-6">
																	<div class="ui search focus mt-30 lbel25">
																		<label>Duration*</label>
																		<div class="ui left icon input swdh19 swdh55">
																			<input class="prompt srch_explore" type="number" min="0" name="duration" required="" placeholder="0">
																			<div class="badge_min">Minutes</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-2 col-md-12">
																	<button class="part_btn_save prt-sv" type="submit">Save Lecture</button>
																</div>
																<div class="col-lg-12 col-md-12">
																	<div class="table-responsive mt-50 mb-0">
																		<table class="table ucp-table">
																			<thead class="thead-s">
																				<tr>
																					<th class="text-center" scope="col">Lecture</th>
																					<th class="cell-ta">Title</th>
																					<th class="text-center" scope="col">Volume</th>
																					<th class="text-center" scope="col">Duration</th>
																					<th class="text-center" scope="col">Page</th>
																					<th class="text-center" scope="col">File</th>
																					<th class="text-center" scope="col">Controls</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td class="text-center">1</td>
																					<td class="cell-ta">Lecture Content Title</td>
																					<td class="text-center">25</td>
																					<td class="text-center">6</td>
																					<td class="text-center">0</td>
																					<td class="text-center"><a href="/create_new_course.html#">Video</a></td>
																					<td class="text-center">
																						<a href="/create_new_course.html#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
																						<a href="/create_new_course.html#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
																					</td>
																				</tr>
																				<tr>
																					<td class="text-center">2</td>
																					<td class="cell-ta">Lecture Content Title</td>
																					<td class="text-center">25</td>
																					<td class="text-center">0</td>
																					<td class="text-center">3</td>
																					<td class="text-center"><a href="/create_new_course.html#">File</a></td>
																					<td class="text-center">
																						<a href="/create_new_course.html#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
																						<a href="/create_new_course.html#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
																<div class="col-lg-12 col-md-12">
																	<div class="save_content">
																		<button class="save_content_btn" type="Submit">Save Course Content</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="table-responsive mt-30">
												<table class="table ucp-table" id="content-table">
													<thead class="thead-s">
														<tr>
															<th class="text-center" scope="col">Content</th>
															<th class="cell-ta">Title</th>
															<th class="text-center" scope="col">lectures</th>
															<th class="text-center" scope="col">Volume</th>
															<th class="text-center" scope="col">Duration</th>
															<th class="text-center" scope="col">Upload Date</th>
															<th class="text-center" scope="col">Files</th>
															<th class="text-center" scope="col">Controls</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="text-center">1</td>
															<td class="cell-ta">Course Content Title</td>
															<td class="text-center">5</td>
															<td class="text-center">50</td>
															<td class="text-center">15</td>
															<td class="text-center">6 April 2019</td>
															<td class="text-center"><a href="/create_new_course.html#">View</a></td>
															<td class="text-center">
																<a href="/create_new_course.html#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
																<a href="/create_new_course.html#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										 </div>
									</div>

									<div class="step-tab-panel step-tab-amenities" id="tab_step4">
										<div class="tab-from-content">
											<div class="title-icon">
												<h3 class="title"><i class="uil uil-file-copy-alt"></i>Extra Information</h3>
											</div>
										   <div class="course__form">
												<div class="row">
													<div class="col-lg-12">
														<div class="extra_info">
															<h4 class="part__title">Captions</h4>
														</div>
														<div class="view_info10">
															<div class="row">
																<div class="col-md-4">
																	<div class="caption__check mt-30">
																		<div class="ui form">
																			<div class="grouped fields">
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>English<span class="filter__counter">(300)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>Español<span class="filter__counter">(210)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>Português<span class="filter__counter">(170)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>Italiano<span class="filter__counter">(174)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>Français<span class="filter__counter">(120)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>Polski<span class="filter__counter">(130)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>Deutsch<span class="filter__counter">(30)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>Bahasa Indonesia<span class="filter__counter">(20)</span></label>
																						</div>
																					</div>
																				</div>
																				<div class="ui form checkbox_sign cp_458">
																					<div class="inline field">
																						<div class="ui checkbox mncheck">
																							<input type="checkbox" tabindex="0" class="hidden">
																							<label>ภาษาไทย<span class="filter__counter">(10)</span></label>
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
											</div>
										 </div>
									</div>

								</form>
								<div class="step-footer step-tab-pager">
									<button data-direction="prev" class="btn btn-default steps_btn">PREVIOUS</button>
									<button data-direction="next" class="btn btn-default steps_btn">Next</button>
									<button data-direction="finish" class="btn btn-default steps_btn">Submit for Review</button>
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
										<a href="/create_new_course.html#"><i class="fab fa-facebook-f"></i></a>
										<a href="/create_new_course.html#"><i class="fab fa-twitter"></i></a>
										<a href="/create_new_course.html#"><i class="fab fa-google-plus-g"></i></a>
										<a href="/create_new_course.html#"><i class="fab fa-linkedin-in"></i></a>
										<a href="/create_new_course.html#"><i class="fab fa-instagram"></i></a>
										<a href="/create_new_course.html#"><i class="fab fa-youtube"></i></a>
										<a href="/create_new_course.html#"><i class="fab fa-pinterest-p"></i></a>
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
	<script src="/js/custom.js"></script>
	<script src="/js/night-mode.js"></script>
	<script src="/js/jquery-steps.min.js"></script>

	<script src="/js/summernote.min.js"></script>

	<script>
		$('#add-course-tab').steps({
		  onFinish: function () {
			alert('Wizard Completed');
		  }
		});


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
			
</body>
</html>