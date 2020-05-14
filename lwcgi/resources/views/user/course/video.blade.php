<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Lecture - LWCGI</title>

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


    <link href='https://unpkg.com/video.js/dist/video-js.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://unpkg.com/video.js/dist/video.js"></script>
    <script type="text/javascript" src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>

</head>

<body>

@include("user.inc.header")
@include("user.inc.sidebar")

<!-- Left Sidebar End -->
<!-- Body Start -->

<style>
    .video-js-responsive-container.vjs-hd {
        padding-top: 56.25%;
    }
    .video-js-responsive-container.vjs-sd {
        padding-top: 75%;
    }
    .video-js-responsive-container {
        width: 100%;
        position: relative;
    }
    .video-js-responsive-container .video-js {
        height: 100% !important;
        width: 100% !important;
        position: absolute;
        top: 0;
        left: 0;
    }
</style>

<div class="wrapper">
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="section3125">
                        <div class="live1452">
                            <div class="video-js-responsive-container vjs-hd"><video autoplay style="width:100%" id="my_video_1" class="video-js vjs-big-play-centered" controls   preload="auto"  data-setup="{\'fluid\': true}"><source src="http://techslides.com/demos/sample-videos/small.mp4"
                                                                                                                                                                                                                                 type="video/mp4"> </video></div>

                        </div>
                        <div class="user_dt5">
                            <div class="user_dt_left">
                                <div class="live_user_dt">

                                    <div class="user_cntnt">
                                        <h4>{{$lecture->title}}</h4>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="right_side">
                        <div class="fcrse_3">
                            <div class="cater_ttle">
                                <h4>Live Chat</h4>
                            </div>
                            <div class="live_chat">
                                <div class="chat1" id="comments_holder">


                                </div>
                            </div>
                            <div class="live_comment">
                                <input class="live_input" id="message" type="text" placeholder="Say Something..." />
                                <button class="btn_live" id="sendComment"><i class='uil uil-message'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="section3125 mb-15 mt-20">
                        <h4 class="item_title">Online Users (<span id="member-count"></span>)</h4>

                        <div class="la5lo1" style="max-height: 200px;overflow: scroll;overflow-x: hidden">
                            <div class="row owl-carouseld live_streamw owl-themed" id="member-list">


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

<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-analytics.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-database.js"></script>

<script src="https://vjs.zencdn.net/7.3.0/video.js"></script>

<script src="/js/notify.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="/js/gathering.js"></script>

<script>

    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;


    var firebaseConfig = {
        apiKey: "AIzaSyCXWC7eqxeW_NsD6_2Gjb9QajVQrRHYqK8",
        authDomain: "vcpapp-a8763.firebaseapp.com",
        databaseURL: "https://vcpapp-a8763.firebaseio.com",
        projectId: "vcpapp-a8763",
        storageBucket: "vcpapp-a8763.appspot.com",
        messagingSenderId: "777217628804",
        appId: "1:777217628804:web:1da630e9f3a26f6c3380d1",
        measurementId: "G-BZY5V19ZQG"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();






    const ref = firebase.database().ref()


    const makeClean = (text) => {
        return text.toString().toLowerCase().trim()
            .replace(/&/g, '-and-')
            .replace(/[\s\W-]+/g, '-')
            .replace(/[^a-zA-Z0-9-_]+/g,'');
    }

    var postRef = ref.child(makeClean("{{$lecture->lecture_code}}"))

    $("#sendComment").click(function (e) {

        var message = $("#message").val()

        e.preventDefault();
        var name = "{{Auth::user()->name}}"
        var name2 = "{{explode(" ",Auth::user()->name)[1]." ".explode(" ",Auth::user()->name)[2]}}"
        var message = $("#message").val()

        if(message != ""){


            postRef.push().set({
                name: name,
                message: $("#message").val(),
                email: "{{Auth::user()->email}}",
                avatar: "https://ui-avatars.com/api/?size=40&name="+name2,
                postedAt: dateTime
            });
        }else{
            alert("comment field cannot be empty")
        }
        // clear your text fields:
        $("#message").val("");
        return false;
    });


    postRef.on("child_added", function (snapshot) {
        var newPost = snapshot.val();


        $("#comments_holder").prepend('<p><img src="' + (newPost.avatar) + '" alt=""> <a>' + (newPost.name) + ' </a> ' +
            '<small>' + (newPost.postedAt) + '</small> |' +
            ' '+(newPost.message)+'</p>');
    });



    var meeting = new Gathering(firebase.database(),"{{$lecture->lecture_code}}");

    // Show meeting attendee list
    meeting.onUpdated(function(count, users) {
        $('#member-count').text(count);
        $('#member-count-tab').text(count);

        $('ul#member-list').empty();

        var unique_users = array_unique(users);
        var username = "{{explode(" ",Auth::user()->name)[1]." ".explode(" ",Auth::user()->name)[2]}}";

        for(var i in unique_users) {

            var unique_user = array_unique(unique_users);
            console.log(unique_user)

            $('#member-list').append(` <div class="col-md-2"><div class="item"><div class="stream_1">
                <a href="/live_output.html" class="stream_bg">
                <img src="https://ui-avatars.com/api/?name=${username}" alt="">
                <h4>${unique_user[i]}</h4>
                <p>live<span></span></p>
            </a>
            </div>
            </div>
            </div> `);
        }
    });

    // If I want to join this meeting
    meeting.join("{{Auth::user()->id}}", "{{Auth::user()->name}}");


    function array_unique(myObject){


        var array = Object.keys(myObject);

        var outputArray = {};

        // Count variable is used to add the
        // new unique value only once in the
        // outputArray.
        var count = 0;

        // Start variable is used to set true
        // if a repeated duplicate value is
        // encontered in the output array.
        var start = false;

        for (j = 0; j < array.length; j++) {
            for (k = 0; k < outputArray.length; k++) {
                if ( array[j] == outputArray[k] ) {
                    start = true;
                }
            }
            count++;
            if (count == 1 && start == false) {
                var kkk = array[j];

                //console.log(kkk);
                outputArray[kkk] = myObject[kkk];

            }
            start = false;
            count = 0;
        }
        return outputArray;





    }
</script>

</body>
</html>