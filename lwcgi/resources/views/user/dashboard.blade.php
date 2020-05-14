<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Dasboard - LWCGI</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
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
@include("admin.inc.header")
@include("admin.inc.sidebar")
<div class="wrapper">
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-lg-8">

                    @if(count($courses2) > 0)
                        <div class="section3125 mt-50">
                            <h4 class="item_title">Featured Courses</h4>
                            <a href="#" class="see150">See all</a>
                            <div class="la5lo1">
                                <div class="owl-carousel featured_courses owl-theme">

                                    @foreach($courses2->take(5) as $course)

                                        <div class="item">
                                            <div class="fcrse_1 mb-20">
                                                <a href="/course_detail_view.html" class="fcrse_img">
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
                                                    <a href="/course_detail_view.html" class="crse14s">{{$course->title}}</a>
                                                    <a href="/index.html#"
                                                       class="crse-cate">{{$course->category->name}}</a>
                                                    <div class="auth1lnkprce">
                                                        <p class="cr1fot">By <a href="#">Admin</a></p>
                                                        <div class="prce142">$ {{$course->amount}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach



                                </div>
                            </div>
                        </div>
                    @endif

                    @if(count($courses) > 0)
                        <div class="section3125 mt-50">
                            <h4 class="item_title">Newest Courses</h4>
                            <a href="#" class="see150">See all</a>
                            <div class="la5lo1">
                                <div class="owl-carousel featured_courses owl-theme">

                                    @foreach($courses->take(5) as $course)

                                        <div class="item">
                                            <div class="fcrse_1 mb-20">
                                                <a href="#" class="fcrse_img">
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
                                                    <a href="#" class="crse14s">{{$course->title}}</a>
                                                    <a href="#"
                                                       class="crse-cate">{{$course->category->name}}</a>
                                                    <div class="auth1lnkprce">
                                                        <p class="cr1fot">By <a href="#">Admin</a></p>
                                                        <div class="prce142">$ {{$course->amount}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach



                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="section3125 mt-50">
                        <h4 class="item_title">Our Instructors</h4>
                        <a href="/all_instructor.html" class="see150">See all</a>
                        <div class="la5lo1">
                            <div class="owl-carousel top_instrutors owl-theme">
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a><img src="/images/facilitators/1.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a class="tutor_name">Pastor
                                                    Lanre Alabi
                                                    </a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a ><img src="/images/facilitators/2.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a  class="tutor_name">Pastor Vale Odu-Thomas</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a ><img src="/images/facilitators/3.jpeg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="" class="tutor_name">Pastor Goke Adebayo</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <div class="tutor_img">
                                            <a ><img src="/images/facilitators/4.jpg" alt=""></a>
                                        </div>
                                        <div class="tutor_content_dt">
                                            <div class="tutor150">
                                                <a href="/instructor_profile_view.html" class="tutor_name">Evang. Dr.
                                                    Eddy Owase</a>
                                                <div class="mef78" title="Verify">
                                                    <i class="uil uil-check-circle"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>


                        @if(count($courses) > 0)
                            <div class="section3125 mt-50">
                                <h4 class="item_title">Events/ Trainings</h4>
                                <a href="#" class="see150">See all</a>
                                <div class="la5lo1">
                                    <div class="owl-carousel featured_courses owl-theme">

                                        @foreach($courses->take(5) as $course)

                                            <div class="item">
                                                <div class="fcrse_1 mb-20">
                                                    <a href="#" class="fcrse_img">
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
                                                        <a href="#" class="crse14s">{{$course->title}}</a>
                                                        <a href="#"
                                                           class="crse-cate">{{$course->category->name}}</a>
                                                        <div class="auth1lnkprce">
                                                            <p class="cr1fot">By <a href="#">Admin</a></p>
                                                            <div class="prce142">$ {{$course->amount}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach



                                    </div>
                                </div>
                            </div>
                        @endif
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="right_side">
                        <div class="fcrse_2 mb-30">
                            <div class="tutor_img">
                                <a href=""><img src="/images/left-imgs/img-10.jpg" alt=""></a>
                            </div>
                            <div class="tutor_content_dt">
                                <div class="tutor150">
                                    <a href="/my_instructor_profile_view.html" class="tutor_name">{{Auth::user()
                                    ->name}}
                                        </a>
                                    <div class="mef78" title="Verify">
                                        <i class="uil uil-check-circle"></i>
                                    </div>
                                </div>
                                <div class="tutor_cate">{{Auth::user()->email}}</div>


                                <a href="#" class="prfle12link">Go To Profile</a>
                            </div>
                        </div>
                        <div class="fcrse_3">
                            <div class="cater_ttle">
                                <h4>Advert </h4>
                            </div>


                                <div class="live-content">
                                   <img src="/courses/1589384947.jpg" style="width:100%" />
                                </div>

                        </div>
                        <div class="get1452">
                            <h4>Having A challenge with the site</h4>
                            <p>Click here to drop your complaint or recommendation</p>
                            <button class="Get_btn">Get Started</button>
                        </div>

                        @if(count($categories) > 0)
                        <div class="fcrse_3">
                            <div class="cater_ttle">
                                <h4>Top Categories</h4>
                            </div>
                            <ul class="allcate15">
                                @foreach($categories as $category)
                                    <li><a href="#" class="ct_item"><i class='uil
                                    uil-arrow'></i>{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="strttech120">
                            <h4>General Info: </h4>
                            <p>Top instructors from around the world teach millions of students . We provide the tools and skills to teach what you love.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="section3125 mt-30">
                        <h4 class="item_title">Testimonials</h4>
                        <div class="la5lo1">
                            <div class="owl-carousel Student_says owl-theme">
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Thank God for the CGI, we have experienced growth like never before
                                                after having strategic trainings with the CGI team. Glory !!!"</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="/images/left-imgs/img-4.jpg" alt="">
                                            </div>
                                            <h4>Jassica William</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>">We used to strugle to retain members in my church but now we have
                                                experieved steady growth and and 50% increase in retaining our members"
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="/images/left-imgs/img-1.jpg" alt="">
                                            </div>
                                            <h4>Rock Smith</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"Thank God for the CGI, we have experienced growth like never before
                                                after having strategic trainings with the CGI team. Glory !!!"</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="/images/left-imgs/img-7.jpg" alt="">
                                            </div>
                                            <h4>Luoci Marchant</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fcrse_4 mb-20">
                                        <div class="say_content">
                                            <p>"We used to strugle to retain members in my church but now we have
                                                experieved steady growth and and 50% increase in retaining our members."</p>
                                        </div>
                                        <div class="st_group">
                                            <div class="stud_img">
                                                <img src="/images/left-imgs/img-6.jpg" alt="">
                                            </div>
                                            <h4>Poonam Sharma</h4>
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