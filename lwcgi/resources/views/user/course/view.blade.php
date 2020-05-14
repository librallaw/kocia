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
<!-- Video Model Start -->
<div class="modal vd_mdl fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <iframe  src="/https://www.youtube.com/embed/Ohe_JzKksvA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>
@include("user.inc.header")
@include("user.inc.sidebar")
<div class="wrapper _bg4586">
    <div class="_215b01">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section3125">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-6">
                                <div class="preview_video">
                                    <a href="/course_detail_view.html#" class="fcrse_img" data-toggle="modal" data-target="#videoModal">
                                        <img src="{{!empty($course->cover)? "/".$course->cover: "/images/courses/add_img.jpg"}}" alt="">

                                    </a>
                                </div>

                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6">
                                <div class="_215b03">
                                    <h2>{{$course->title}}</h2>
                                    <span class="_215b04">{{$course->sub_title}}</span>
                                </div>

                                <div class="_215b05">
                                    {{$course->lectures->count()}} Lecture(s)
                                </div>

                                <div class="_215b05">
                                    Created {{$course->created_at->diffForHumans()}}
                                </div>
                                <ul class="_215b31">
                                    <li><button class="btn_adcart">Enroll for this Course</button></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_215b15 _byt1458">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="course_tabs">
                        <nav>
                            <div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab"
                                   href="#nav-about" role="tab" aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="nav-courses-tab" data-toggle="tab"
                                   href="#nav-courses" role="tab" aria-selected="false">Course Lectures</a>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="_215b17">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_tab_content">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                                <div class="_htg451">
                                    <?php echo $course->description ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-courses" role="tabpanel">
                                <div class="crse_content">
                                    <h3>Lectures</h3>
                                    <div class="_112456">
                                        <ul class="accordion-expand-holder">
                                            <li><span class="accordion-expand-all _d1452">Expand all</span></li>
                                            <li><span class="_fgr123"> {{$course->lectures->count()}}
                                                    lecture(s)</span>
                                            </li>
                                        </ul>
                                    </div>

                                    @if($course->lectures->count() > 0)
                                        @foreach($course->lectures as $lecture)
                                            <div id="accordione" class="ui-accordion ui-widget ui-helper-reset">


                                                <a href="{{route("showCourseVideo",['lecture_code'=>
                                                $lecture->lecture_code])}}"
                                                   class="accordion-header
                                                ui-accordion-header
                                                ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                    <div class="section-header-left">
                                                            <span class="section-title-wrapper">
                                                                <i class='uil uil-presentation-play crse_icon'></i>
                                                                <span
                                                                        class="section-title-text">{{$lecture->title}}</span>
                                                            </span>
                                                    </div>
                                                    <div class="section-header-right">
                                                        <span
                                                                class="num-items-in-section">{{$lecture->facilitator}}</span>

                                                        <span
                                                                class="section-header-length">{{$lecture->duration}}</span>
                                                    </div>
                                                </a>

                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ("admin.inc.footer")
</div>
<!-- Body End -->

<script src="/js/vertical-responsive-menu.min.js"></script>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="/vendor/semantic/semantic.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/night-mode.js"></script>

</body>
</html>