<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Quiz - LWCGI</title>
		
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
		<link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
		
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
						<h2 class="st_title"><i class="uil uil-question-circle"></i> Create New Quiz</h2>
					</div>					
				</div>				
				<div class="row">
					<div class="col-6">
						<div class="course_tabs_1">
							<div id="add-course-tab" class="step-app">

								<div class="col-md-12">
									<div class="card card-body">
										<label>Quiz Title*</label>
										<div class="ui left icon input swdh19">
											<input class="" type="text" placeholder="Insert your Quiz title."
												   name="title"  id="title" maxlength="100" value=""
												   required>

										</div>
									</div>
								</div>

								<form class="step-contents col-md-12" action="" method="post"
									  id="question_form">
									@csrf
									<div class="step-tab-panel step-tab-info active" id="tab_step1">
										<div class="tab-from-content">

											<div class="course__form">
												<div class="general_info10">
													<div class="row">

														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>Question*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="question" maxlength="100"  value="" required>
																	<div class="badge_num">100</div>
																</div>
															</div>

														</div>
														<div id="options_holder" class="col-md-12">


														</div>



														<div class="col-md-12" style="margin-top: 10px;">
															<button id="add_option_button" class="btn btn-default steps_btn"  onclick="addOption(this)">Add option</button>
														</div>






														<div class=" col-md-6">
															<div class="mt-30 lbel25">
																<label>Select Correct Answer</label>
															</div>
															<select class="form-control" name="correct" id="correct_option"
																	required>
																<option value="">Select Option</option>
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

									<button type="submit" class="btn btn-default steps_btn" id="submit_btn">Add
										Another Question
										</button>

								</form>

							</div>
                        </div>
                    </div>


					<div class="col-6">
						<div class="course_tabs_1">
							<div id="review-tab" class="step-app" style="display: none;">

								<div class="step-contents" style="max-height: 800px;overflow-x: hidden;
								   overflow: scroll">
									@csrf
									<div class="step-tab-panel step-tab-info active" id="tab_step1">
										<div class="tab-from-content" id="preview">





										</div>
									</div>


								</div>

								<br />
								<br />

								<button type="submit" class="btn btn-default steps_btn" id="create_btn"
										onclick="submit_questions()">Submit Final
									Quiz</button>

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
	<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
	<script src="/js/notify.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.13/dist/sweetalert2.all.min.js"></script>

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

        var questionHolder =  {};

		function addOption(data){

			$("#options_holder").append(
			    `<div class="col-md-12">
					<div class="ui search focus mt-30 lbel25">
							<label>opt4*</label>
							<div class="ui left icon input swdh19">
							    <input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="options"  id="op4" maxlength="100"  value="" required>
								<div class="badge_num">100</div>
							</div>
					</div>
				</div>
				`
			)
		}

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

<script>
    var questionHolder =  {};
    var counting = 0;
    var empty = 0

	$("#submit_btn").click(function (e){

        e.preventDefault();

        var elements = document.getElementById("question_form").elements;

        for (var i = 0, element; element = elements[i++];) {
            if (element.name === "options" && element.value === "")
               // console.log("An field empty textfield")
                empty ++;
        }


        if(empty > 0){

            $.notify("You have "+empty+" field(s)", {
                className: 'error',
                autoHide: true,
            });

            empty = 0;
		}








//
//        var question = $("#question").val();
//        var op1 = $("#op1").val();
//        var op2 = $("#op2").val();
//        var op3 = $("#op3").val();
//        var op4 = $("#op4").val();
//
//        var correct_option = $("#correct_option").val();
//
//	    if(question != "" && op1 != "" && op2 != "" && op3 != "" && op4 != "" && correct_option != ""){
//
//	        var count = Object.keys(questionHolder).length;
//
//	        var newkey = "question"+counting;
//
//            questionHolder[newkey] ={question:question, op1:op1, op2:op2, op3:op3, op4:op4,correct:correct_option};
//			counting = counting + 1;
//
//			var preview = `<div class="course__form" style="margin-top:0px" id="${newkey}-question-holder">
//												<div class="general_info10">
//													<div class="row">
//														<div class="col-md-12">
//															<br />
//															<br />
//															<button class="btn btn-danger" onclick="deleteReview(this)"
//																	question_id="${newkey}"  >x Remove</button>
//															<br />
//															<br />
//														</div>
//														<h2>Question ${counting}</h2>
//
//														<div class="col-md-12">
//															<div class="ui search focus mt-30 lbel25">
//																<label>Question*</label>
//																<div class="ui left icon input swdh19">
//																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="${newkey}-question" maxlength="100"  value="${question}" required>
//																	<div class="badge_num">100</div>
//																</div>
//															</div>
//														</div>
//
//														<div class="col-md-12">
//															<div class="ui search focus mt-30 lbel25">
//																<label>opt1*</label>
//																<div class="ui left icon input swdh19">
//																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" id="${newkey}-op1" maxlength="100" value="${op1}" required>
//																	<div class="badge_num">100</div>
//																</div>
//															</div>
//														</div>
//
//														<div class="col-md-12">
//															<div class="ui search focus mt-30 lbel25">
//																<label>opt2*</label>
//																<div class="ui left icon input swdh19">
//																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="${newkey}-op2" maxlength="100"  value="${op2}" required>
//																	<div class="badge_num">100</div>
//																</div>
//															</div>
//														</div>
//
//														<div class="col-md-12">
//															<div class="ui search focus mt-30 lbel25">
//																<label>opt3*</label>
//																<div class="ui left icon input swdh19">
//																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="${newkey}-op3" maxlength="100" value="${op3}" required>
//																	<div class="badge_num">100</div>
//																</div>
//															</div>
//														</div>
//
//														<div class="col-md-12">
//															<div class="ui search focus mt-30 lbel25">
//																<label>opt4*</label>
//																<div class="ui left icon input swdh19">
//																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="${newkey}-op4" maxlength="100" value="${op4}" required>
//																	<div class="badge_num">100</div>
//																</div>
//															</div>
//														</div>
//
//
//
//														<div class="col-md-6">
//															<div class="mt-30 lbel25">
//																<label>Select Correct Answer</label>
//															</div>
//															<select class="ui hj145 dropdown cntry152 prompt
//															srch_explore" name="correct" id="${newkey}-correct_option" required>
//																<option selected
//																		value="${correct_option}">${correct_option}</option>
//																<option value="opt1">Opt1 </option>
//																<option value="opt2">Opt2</option>
//																<option value="opt3">Opt3</option>
//																<option value="opt4">Opt4</option>
//
//															</select>
//														</div>
//														<br />
//
//
//
//													</div>
//												</div>
//												<br />
//												<br />
//												<div class=" col-md-12 clearfix">
//
//
//													<button class="btn btn-warning edit_button_review" question_id="${newkey}"
//															id="edit_button" onclick="editReview(this)"
//															style="color:white">Edit
//														Question</button>
//												</div>
//
//											</div>
//											<br />
//												<br />
//										`;
//
//										$("#preview").append(preview);
//
//										$("#review-tab").show(1000);
//										$("#question_form")[0].reset();
//            							//$("#correct_option").val("");
////                                        $("#myform").find('input:text, input:password, input:file, select, textarea')
////											.val('');
//
//
//										$.notify("Question Submitted for review", {
//											className: 'success',
//											autoHide: true,
//										});
//
//
//
//
//
//			//alert(Object.keys(questionHolder).length)
//
//		}else{
//
//            $.notify("All fields are compulsory", {
//                className: 'error',
//                autoHide: true,
//            });
//		}




	});



    function submit_questions() {


        var title = $("#title").val();


        if (title != ""){

            if (Object.keys(questionHolder).length > 0) {



                Swal.fire({
                    title: 'Are you sure?',
                    text: "You can go over the questions one more time!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, create the Quiz!'
                }).then((result) => {
                    if (result.value) {

                        NProgress.start()

                        $("#create_btn").html("... sending")

                        var formData = {

                            'questions': questionHolder,
                            'name': title,

                        };



                        $.ajax({
                            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                            url: '{{route("doCreateQuiz")}}', // the url where we want to POST
                            data: formData,
                            // dataType    : 'json', // what type of data do we expect back from the server
                            encode: true
                        })


                        // using the done promise callback
                            .done(function (data) {

                                if (data.status) {

                                    NProgress.done();
                                    $.notify(data.message, {
                                        className: 'success', autoHide: false,
                                    });

                                    Swal.fire(
                                        data.message,
                                        'Quiz Successfully created!',
                                        'success'
                                    )

                                    $("#preview").html("");
                                    $("#review-tab").hide(500);
                                    $("#title").val("");

                                    $("#create_btn").html("Create Quiz");
                                    questionHolder =  {};
                                    counting = 0;

                                } else {


                                    NProgress.done();

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: data.message,

                                    })

                                    $("#create_btn").html("Create Quiz")

                                }

                            });
                    }else{
                        Swal.fire({
                            icon: 'info',
                            title: 'I thought so too :)',
                            showConfirmButton: false,
                            timer: 1500
                        })

					}
                })


            } else {
                $.notify("You need to add questions before submitting", {
                    className: 'error',
                    autoHide: true,
                });
            }
    }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The Quiz title field is required',

            })

		}


    }
</script>


	<script>

		function editReview(idd){

            let id = $(idd).attr("question_id");

            let question = $("#"+id+"-question").val();
            let op1      = $("#"+id+"-op1").val();
            let op2 	 = $("#"+id+"-op2").val();
            let op3 	 = $("#"+id+"-op3").val();
            let op4 	 = $("#"+id+"-op4").val();
            let correct_option = $("#"+id+"-correct_option").val();

            if(question != "" && op1 != "" && op2 != "" && op3 != "" && op4 != "" && correct_option != ""){
                    questionHolder[id] ={question:question, op1:op1, op2:op2, op3:op3, op4:op4,correct:correct_option};

                    $.notify("Edit Successful", {
                    className: 'success', autoHide: true,
                });

			}else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'All fieds are required to edit',

                })
			}
		}



		function deleteReview (idd){

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {

                    let id = $(idd).attr("question_id");

                    delete questionHolder[id];

                    var deleted_id = document.getElementById(id+"-question-holder");
                    deleted_id.remove();

                    $.notify("Question Deleted", {
                        className: 'success', autoHide: true,
                    });


                }
            })


		}




	</script>
			
</body>
</html>