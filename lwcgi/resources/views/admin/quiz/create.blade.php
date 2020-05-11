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

								<form class="step-contents" action="{{route("doCreateCourse")}}" method="post" enctype="multipart/form-data">
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
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="question" maxlength="100" id="" value="question shs" required>
																	<div class="badge_num">100</div>
																</div>
															</div>
														</div>

														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>opt1*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" id="op1" maxlength="100" id="" value="optiin1" required>
																	<div class="badge_num">100</div>
																</div>
															</div>
														</div>

														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>opt2*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="op2" maxlength="100" id="" value="optiin2" required>
																	<div class="badge_num">100</div>
																</div>
															</div>
														</div>

														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>opt3*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="op3" maxlength="100" id="" value="optiin3" required>
																	<div class="badge_num">100</div>
																</div>
															</div>
														</div>

														<div class="col-md-12">
															<div class="ui search focus mt-30 lbel25">
																<label>opt4*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title"  id="op4" maxlength="100" id="" value="optiin4" required>
																	<div class="badge_num">100</div>
																</div>
															</div>
														</div>



														<div class=" col-md-6">
															<div class="mt-30 lbel25">
																<label>Select Correct Answer</label>
															</div>
															<select class="ui hj145 dropdown cntry152 prompt
															srch_explore" name="correct" id="correct_option" required>
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

									<button type="submit" class="btn btn-default steps_btn" id="submit_btn">Submit for
										Review</button>

								</form>

							</div>
                        </div>
                    </div>


					<div class="col-6">
						<div class="course_tabs_1">
							<div id="review-tab" class="step-app" style="display: none;">

								<div class="step-contents" action="{{route("doCreateCourse")}}" method="post"
								   enctype="multipart/form-data" style="max-height: 500px;overflow-x: hidden;
								   overflow: scroll">
									@csrf
									<div class="step-tab-panel step-tab-info active" id="tab_step1">
										<div class="tab-from-content" id="preview">




										</div>
									</div>


								</div>

								<button type="submit" class="btn btn-default steps_btn" id="create_btn" onclick="submit_questions()">Create
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

<script>
    var questionHolder =  {};
    var counting = 1;

    var question = $("#question").val();
    var op1 = $("#op1").val();
    var op2 = $("#op2").val();
    var op3 = $("#op3").val();
    var op4 = $("#op4").val();
    var correct_option = $("#correct_option").val();



	$("#submit_btn").click(function (e){
	    e.preventDefault();


        var correct_option = $("#correct_option").val();

	    if(question != "" && op1 != "" && op2 != "" && op3 != "" && op4 != "" && correct_option != ""){

	        var count = Object.keys(questionHolder).length;

	        var newkey = "question"+counting;

            questionHolder[newkey] ={question:question, op1:op1, op2:op2, op3:op3, op4:op4,correct:correct_option};
             counting = counting + 1;

//            questionHolder.question = question;
//            questionHolder.op1 = op1;
//            questionHolder.op2 = op2;
//            questionHolder.op3 = op3;
//            questionHolder.op4 = op4;

			var preview = '<div class="card card-body"><h2 class="st_title"><i class="uil uil-question-circle"></i>'+newkey+'</h2><br /> <label>QUESTION</label> <input type="text" value="'+question+'" class="form-control"/> <br /><label>A</label> <input type="text" value="'+op1+'" class="form-control"/><br /><label>B</label><input type="text" value="'+op2+'" class="form-control"/> <br /> <label>C</label> <input type="text" value="'+op3+'" class="form-control"/> <br /> <label>D</label> <input type="text" value="'+op4+'" class="form-control"/> <br /> <button class="btn btn-warning"><i class="fa ' +
				'fa-pencil"></i>Update</button></div>';

			$("#preview").append(preview);

			$("#review-tab").show(1000);

	       console.log(JSON.stringify(questionHolder))





			//alert(Object.keys(questionHolder).length)

		}else{
	        alert("Ogade")
		}




	});


    function submit_questions() {




        if(Object.keys(questionHolder).length > 0){



            NProgress.start()
            $("#create_btn").html("... sending")

            var formData = {

                'questions'           : questionHolder,
                'name'           : "first Quiz - <?php echo time()?>",

            };

            //alert("I got here");

            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : '{{route("doCreateQuiz")}}', // the url where we want to POST
                data        : formData,
                // dataType    : 'json', // what type of data do we expect back from the server
                encode          : true
            })

            //  NProgress.start()
            // using the done promise callback
                .done(function(data) {

                    // alert("I dididid")
                    // log data to the console so we can see
                    // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                    if(data.status){

                        NProgress.done();
                        $("#salvation").notify(data.message, {className: 'success',autoHide: false,
                        } );

                    }else{
                        NProgress.done();
                        $.notify(data.message, {className: 'error',autoHide: false,
                        } );
                        $("#create_btn").html("Create Quiz")

                    }

                    // here we will handle errors and validation messages
                });
        }else{
            $.notify("All fields are compulsory", {className: 'error',
                autoHide: true,} );
        }


    }
</script>
	<script>






	</script>
			
</body>
</html>