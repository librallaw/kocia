<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact - CeAbuja Ministry Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic'%20rel='stylesheet'%20type='text/css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic'%20rel='stylesheet'%20type='text/css">
    <!-- Styles -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="color1" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/wedgewood.css" title="color2" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/blue.css" title="color3" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="color4" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/darkgreen.css" title="color5" />
</head>

<body>
    <div class="theme-layout">

        <!--- HEADER -->
        @include("inc.header")

        <!-- Responsive Header -->
        <!-- Responsive Menu -->
        <div class="page-top">
            <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
            <div class="container"> 
                <h1>CONTACT <span>US</span></h1>

            </div>
        </div><!--- PAGE TOP -->




        <section>
            <div class="block remove-gap">
                <div class="container">
                    <div class="row">
                        @include("alert")
                        <div class="col-md-12">
                            <div class="title2">
                                <br />
                                <br />
                                <h2>LET'S <span>GET IN TOUCH</span></h2>
                            </div>

                            <div class="row">
                                <div class="col-md-6 column">
                                    <h4>HOW MAY WE HELP YOU</h4>
                                    <div class="space"></div>
                                    <p>We’ve are here to help answer this question—or any others you might have.
                                        Please do contact us.</p>
                                    <div class="space"></div>
                                    <div class="space"></div>

                                </div><!--- CONTACT INFORMATION -->
                                <div class="col-md-6 column">
                                    <h4>FILL IN THE FORM BELOW</h4>
                                    <div class="space"></div>
                                    <div id="message"></div>
                                    <form class="theme-form" method="post" action="{{route("submitContact")}}" name="contactform"
                                          id="contactfoddrm">
                                        @csrf
                                        <input name="first_name" class="half-field form-control" type="text"
                                               id="name"  placeholder="First Name" required/>
                                        <input name="last_name" class="half-field form-control" type="text"
                                               id="name"  placeholder="Last Name" required />
                                        <input name="email" class="half-field form-control" type="text" id="email"
                                               placeholder="Email" required />
                                        <textarea name="message" class="form-control" id="comments"
                                                  placeholder="Message" required ></textarea>

                                        <input class="submit" type="submit"  id="submit" value="SUBMIT" />
                                    </form><!--- FORM -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	

        <!--- CONTACT INFORMATION -->

        <!-- FOOTER -->

        @include("inc.footer")<!-- BOTTOM FOOTER STRIP -->




    </div>

    <!-- SCRIPTS-->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
    <script src="js/jquery.1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="js/enscroll-0.5.2.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.contact-form.js"></script>
    <script src="js/styleswitcher.js"></script>
    <script src="../../www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript" src="js/jquery.downCount.js"></script>


@include("inc.scripts")


</body>