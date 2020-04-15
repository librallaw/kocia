<!DOCTYPE html>


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Watch Live - CeAbuja Ministry Center</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="" />

    <meta name="keywords" content="" />



    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic" rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic" rel='stylesheet' type='text/css'>

    <!-- Styles -->

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/mediaelementplayer.min.css" />

    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <link href="css/responsive.css" rel="stylesheet" type="text/css" />



    <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="color1" />

    <link rel="alternate stylesheet" type="text/css" href="css/colors/wedgewood.css" title="color2" />

    <link rel="alternate stylesheet" type="text/css" href="css/colors/blue.css" title="color3" />

    <link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="color4" />

    <link rel="alternate stylesheet" type="text/css" href="css/colors/darkgreen.css" title="color5" />

    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" type="text/css" media="all" />

    <link href='https://unpkg.com/video.js/dist/video-js.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://unpkg.com/video.js/dist/video.js"></script>
    <script type="text/javascript" src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->


</head>



<body>

<div class="theme-layout">


    @include("inc.header")



    <div class="page-top">

        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>

        <div class="container">

            <h1>WATCH <span>LIVE</span></h1>


        </div>

    </div><!--- PAGE TOP -->



    <section>

        <div class="block">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 column">

                        <div class="single-page">

                            <video id="my_video_1" class="video-js vjs-big-play-centered" controls  autoplay preload="auto" width="640"
                                   height="400"
                                   data-setup='{"fluid": true}'>
                                <source src="https://immout.netromedia.com/IMMPowered/ABJZON/playlist.m3u8" type="application/x-mpegURL">
                            </video>


                            <script src="https://vjs.zencdn.net/7.3.0/video.js"></script>



                            <div class="meta">

                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> {{date("D, M jS, Y")}}</li>
                                </ul>



                            </div><!-- POST META -->





                        </div><!-- SERMON SINGLE -->





                        <div class="row" style="">

                            <div class="col-md-6 column">
                                <div class="title">
                                    <h2><span>Announcements</span></h2>
                                </div>
                                <div class="service-block">

                                    <div class="service-image">

                                        <img src="images/resource/thumbs_announce.jpg" alt="">



                                    </div>
                                    <p>Click to stay updated with latest informations</p>

                                </div>

                            </div>



                            <div class="col-md-6 column">
                                <div class="title">
                                    <h2><span>Givings</span></h2>
                                </div>

                                <div class="service-block">

                                    <div class="service-image">

                                        <a href="{{route("members_givings")}}" target="_blank"><img src="images/resource/worship.jpg"
                                                                             alt=""></a>


                                    </div>

                                    <p>Click here to connect to our live service bring them into their.</p>

                                </div>

                            </div>



                        </div>






                        <!-- PASTOR INFO -->






                     <!-- SHARE THIS -->





                        <!-- COMMENTS -->



                        <!-- COMMENT FORM -->

                    </div>



                    <aside class="col-md-4 sidebar column">

                        <div class="widget" style="max-height: 400px; overflow: scroll;overflow-x: hidden">

                            <div class="widget-title"><h4>COMMENTS</h4></div>
                            <div class="comments" >

                                <h4></h4>



                                <ul id="commentsHolder">

                                    @if(count($comments) > 0)

                                        @foreach($comments as $comment)

                                            <li><div
                                                        class='comment'><h5>{{$comment->name}}<i><span>{{$comment->created_at->diffForHumans()}}</span></i></h5>
                                                    <p>{{$comment->comment}}</p></div></li>

                                        @endforeach

                                        @endif

                                </ul>

                            </div>







                        </div><!-- GALLERY -->

                        <style>
                            .spForm{
                                border: 1px solid #E8E7E7;
                                color: #B4B4B4;
                                float: left;
                                font-family: open sans, sans-serif;
                                font-size: 12px;
                                height: 40px;
                                line-height: 20px;
                                margin-bottom: 12px;
                                padding: 10px 20px;
                                width: 100%;
                                -webkit-border-radius: 3px;
                                -moz-border-radius: 3px;
                                -ms-border-radius: 3px;
                                -o-border-radius: 3px;
                                border-radius: 3px;
                            }

                            .spText{
                                border: 1px solid #E8E7E7;
                                color: #B4B4B4;
                                float: left;
                                font-family: open sans, sans-serif;
                                font-size: 12px;
                                height: 100px;
                                line-height: 20px;
                                margin-bottom: 12px;
                                padding: 10px 20px;
                                width: 100%;
                                resize: none;
                                -webkit-border-radius: 3px;
                                -moz-border-radius: 3px;
                                -ms-border-radius: 3px;
                                -o-border-radius: 3px;
                                border-radius: 3px;
                            }
                        </style>

                        <div class="leave-comment">

                            <h4><i class="fa fa-edit"></i> LEAVE A COMMENT</h4>

                            <div id="messageDiv"></div>
                            <p>Your email address will not be published.</p>


                            <div style="float: left;margin-top: 10px;width: 100%">

                                <div class="form-group">
                                     <input type="text" placeholder="Name" name="nameBox" id="nameBox"
                                            class="form-control spForm" />
                                </div>

                                <div class="form-group">
                                        <textarea placeholder="Comment" id="commentBox" class="spText"></textarea>
                                </div>

                                <button id="submit_comment" class="btn btn-danger" onclick="sendComment()">Comment</button>

                            </div>

                        </div>





                        <!-- CATEGORIES -->



                        <!-- POPULAR POSTS -->


                    </aside><!-- SIDEBAR -->



                </div>

            </div>

        </div>

    </section>



    <!-- FOOTER -->



    @include("inc.footer")<!-- BOTTOM FOOTER STRIP -->







</div>



<!-- SCRIPTS-->





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>


<script>





    function sendComment(e){
        var nameBox = document.getElementById("nameBox").value;
        var commentBox = $("#commentBox").val();

        if(nameBox != "" && commentBox != "") {


            var formData = {
                'name': nameBox,
                'comment': commentBox,
            };

            //alert("I got here");

            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: '/addComment', // the url where we want to POST
                data: formData,
                // dataType    : 'json', // what type of data do we expect back from the server
                encode: true
            })

            //  NProgress.start()
            // using the done promise callback
                .done(function (data) {

                    // alert("I dididid")
                    // log data to the console so we can see
                    // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                    if (data.status) {

                        NProgress.done();
                        $.notify(data.message, {
                            className: 'success', autoHide: true,
                        });

                        var sentComment = "<li><div class='comment'><h5>"+nameBox+"<i><span>Just Now</span></i></h5> " + "<p>"+commentBox+"</p></div></li>";

                        $("#commentsHolder").prepend(sentComment);


                        $("#commentBox").val("")
                        $("#nameBox").val("")



                    } else {
                        NProgress.done();
                        $.notify("Am error occured while trying to process your request, please try again later", {
                            className: 'error', autoHide: true,
                        });

                    }

                    // here we will handle errors and validation messages
                });

        }else{
            $("#messageDiv").notify("All fields are required", {className: 'error',autoHide: true,
            } )
        }

    }


</script>

<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script src="js/notify.js"></script>


<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.poptrox.min.js" type="text/javascript"></script>

<script src="js/enscroll-0.5.2.min.js"></script>

<script src="js/mediaelement-and-player.min.js"></script>

<script src="js/script.js"></script>

{{--<script src="js/styleswitcher.js"></script>--}}

<script type="text/javascript" src="js/jquery.downCount.js"></script>

<script type="text/javascript">

    $('audio,video').mediaelementplayer();



</script>

<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

<script src="https://vjs.zencdn.net/7.6.6/video.js"></script>

<script src="//biblia.com/api/logos.biblia.js"></script>
<script>logos.biblia.init();</script>




@include("inc.scripts")

</body>