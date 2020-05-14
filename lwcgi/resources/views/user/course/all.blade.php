<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>All Course - LWCGI</title>

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
@include("user.inc.sidebar")
<div class="wrapper">
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div class="section3125">
                        <div class="explore_search">
                            <div class="ui search focus">
                                <div class="ui left icon input swdh11">
                                    <input class="prompt srch_explore" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                                    <i class="uil uil-search-alt icon icon2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="_14d25">
                        <div class="row">
                            @if($courses->count() > 0)
                                @foreach($courses as $course)
                                    <div class="col-lg-3 col-md-4">
                                        <div class="fcrse_1 mt-30">

                                                <a href="{{route("showViewUserCourse",['code'=>$course->course_code])
                                                }}"
                                                   class="fcrse_img">
                                                    <img src="{{ !empty($course->cover)? "/".$course->cover: "/images/courses/add_img.jpg"}}" alt="">
                                                    <div class="course-overlay">
                                                        <div class="badge_seller">{{$course->category->name}}</div>

                                                        <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                        <div class="crse_timer">
                                                            {{$course->created_at->diffForHumans()}}
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="fcrse_content">

                                                    <div class="vdtodt">

                                                        <span class="vdt14">{{$course->created_at->diffForHumans()}}</span>
                                                    </div>
                                                    <a href="{{route("showViewUserCourse",['code'=>$course->course_code])
                                                }}" class="crse14s">{{$course->title}}</a>
                                                    <a href="{{route("showViewUserCourse",['code'=>$course->course_code])
                                                }}"
                                                       class="crse-cate">{{$course->category->name}}</a>
                                                    <div class="auth1lnkprce">
                                                        <p class="cr1fot">By <a href="#">Admin</a></p>
                                                        <div class="prce142">$ {{$course->amount}}</div>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="alert alert-info">No course found</div>
                            @endif


                            <div class="col-md-12">
                                <div class="main-loader mt-50">
                                    {{$courses -> links()}}
                                </div>
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
<script src="/js/custom.js"></script>
<script src="/js/night-mode.js"></script>

</body>
</html>