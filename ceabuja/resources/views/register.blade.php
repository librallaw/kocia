<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reg Service - CeAbuja Ministry Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Google Fonts -->
    <link href="/https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic'%20rel='stylesheet'%20type='text/css">
    <link href="/https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic'%20rel='stylesheet'%20type='text/css">
    <!-- Styles -->
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <link href="/css/responsive.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/css/colors/red.css" title="color1" />
    <link rel="alternate stylesheet" type="text/css" href="/css/colors/wedgewood.css" title="color2" />
    <link rel="alternate stylesheet" type="text/css" href="/css/colors/blue.css" title="color3" />
    <link rel="alternate stylesheet" type="text/css" href="/css/colors/green.css" title="color4" />
    <link rel="alternate stylesheet" type="text/css" href="/css/colors/darkgreen.css" title="color5" />
</head>

<body>
    <div class="theme-layout">

        @include("inc.header")

        <div class="page-top">
            <div class="parallax" style="background:url(/images/parallax1.jpg);"></div>
            <div class="container"> 
                <h1>REGISTER FOR SERVICE</h1>

            </div>
        </div><!--- PAGE TOP -->

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="block remove-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="row">
                                @include("alert")
                                <div class="col-md-3 column"></div><!--- CONTACT INFORMATION -->
                                <div class="col-md-6 column">
                                    <div class="title2">
                                        <h2>Enter Info to watch <span>LIVE SERVICE</span></h2><br />
                                        @if(Auth::check())

                                            <style>
                                                #basic_holder{
                                                    display:none;
                                                }
                                            </style>

                                        @endif

                                    </div>

                                    <form class="theme-form" method="post" action="{{route("doregisterService")}}" name="contactform"
                                          id="contactsform">
                                        @csrf

                                        <div id="basic_holder">
                                        <div class="form-group">
                                        <label>*First Name</label>

                                        <input name="first_name" class="half-field form-control" type="text" id="fname"
                                               placeholder="" value="@if(Auth::check()){{Auth::user()
                                               ->first_name}}@endif" required/>
                                        </div>

                                        <div class="form-group">
                                        <label>*Last Name</label>
                                        <input name="last_name" class="half-field form-control" type="text" id="lname"
                                               placeholder="" value="@if(Auth::check()){{Auth::user()
                                               ->first_name}}@endif" required/>
                                        </div>

                                        <div class="form-group">
                                            <label>*Email </label>
                                            <input name="email" class="half-field form-control" type="email"
                                                   id="email"
                                               placeholder="" value="@if(Auth::check()){{Auth::user()
                                               ->email}}@endif" required/>
                                        </div>
                                        </div>

                                        <label>*How many are watching </label>
                                        <input name="howmanywatching" class="half-field form-control" type="number"
                                               id="number"
                                               placeholder="" required min="1"/>



                                        <input class="submit" type="submit"  id="submit" value="REGISTER" />
                                    </form><!--- FORM -->
                                </div>
                                <div class="col-md-3 column"></div><!--- CONTACT INFORMATION -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	
        
        <!-- FOOTER -->

        @include("inc.footer")<!-- BOTTOM FOOTER STRIP -->




    </div>

    <!-- SCRIPTS-->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="/js/modernizr.custom.17475.js"></script>
    <script src="/js/jquery.1.10.2.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="/js/enscroll-0.5.2.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/ajax.contact-form.js"></script>
    <script src="/js/styleswitcher.js"></script>
    <script src="../../www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript" src="/js/jquery.downCount.js"></script>

@include("inc.scripts")


</body>