<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register - CeAbuja Ministry Center</title>
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

    @include("inc.header")
    <div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>
        <div class="container">
            <h1>REGISTER</h1>
        </div>
    </div><!--- PAGE TOP -->

<style>
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }
</style>


    <section>
        <div class="block remove-gap">
            <div class="container">
                <div class="row" >

                    @include("alert");
                    <div class="col-md-12">


                        <div class="row" >
                            <div class="col-md-3 column"></div><!--- CONTACT INFORMATION -->
                            <div class="col-md-6 column">
                                <div class="title2">
                                    <h2>CE AMC MEMBER  <span>REGISTRATION FORM</span></h2>
                                    <span>Please fill form correctly with your details. Note that your information is treated with utmost confidentiality
</span>
                                </div>

                                <form class="theme-form" method="post" action="{{route('register') }}" name="contactform" id="scontactform" style="background: #ccc;
                                padding:20px;">
                                    @csrf

                                    <div class="form-group">
                                        <label>(*) Title</label>
                                    <select name="title" id="mytitle"class="half-field form-control" required>
                                        <option value="">Select Title</option>
                                        <option value="Brother" >Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Pastor">Pastor</option>
                                        <option value="Deacon">Deacon</option>
                                        <option value="Deaconess">Deaconess</option>
                                    </select>
                                        <br />
                                        <br />
                                    </div>

                                    <div class="form-group">
                                        <label>(*) First Name</label>
                                        <input name="first_name" class="half-field form-control" type="text" id="fname"
                                               placeholder="" value="{{ old('first_name') }}" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>(*) Last Name</label>
                                        <input name="last_name" class="half-field form-control" type="text" id="lname"
                                               placeholder="" value="{{ old('last_name') }}" required/>
                                    </div>


                                    <div class="form-group">
                                        <label>Kingschat Number with country code(eg+23476539304)</label>
                                            <input name="kcnumber" class="half-field form-control" type="text" id="kcnumber" placeholder="Kingschat Number" value="{{ old('kcnumber') }}"/>
                                    </div>


                                    <div class="form-group">
                                    <label>Other Phone Number</label>
                                    <input name="other_number" class="half-field form-control" type="text"
                                           id="number"
                                           placeholder="Other Number" value="{{ old('other_number') }}" />
                                    </div>

                                    <div class="form-group">
                                        <label>(*) Email</label>
                                        <input name="email" class="half-field form-control" type="text" id="email"
                                               placeholder="Email" value="{{ old('email') }}" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>(*) Password (Must not be less than 4) </label>
                                        <input name="password" class="half-field form-control" type="password"
                                               id="password"  placeholder="Password" value="{{ old('password') }}" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>(*) Confirm Password </label>
                                        <input name="confirm_password" class="half-field form-control" type="password"
                                               id="cpass"
                                               placeholder="ConfirmPassword" value="{{ old('confirm_password') }}" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Marital Status </label>
                                        <select name="marital_status" id="mytitle"class="half-field form-control">
                                            <option value="">Select Status</option>
                                            <option value="Brother" >Single</option>
                                            <option value="Sister">Married</option>
                                        </select>
                                        <br />
                                        <br />

                                    </div>

                                    <div class="form-group">
                                        <label>Wedding Anniversary </label>
                                        <input name="wedding_anniversary" class="half-field form-control" type="date"
                                           id="wed"
                                           placeholder="Wedding Annivesary" value="{{ old('wedding_anniversary') }}" />
                                    </div>

                                    <div class="form-group">
                                        <label>Cell/PCF </label>
                                        <input name="cell" class="half-field form-control" type="text" id="cell" placeholder="PCF/CELL" value="{{ old('cell') }}"/>
                                    </div>



                                    <span>Already registered? Please click to <a href="/login">Login</a></span>
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

 @include("inc.footer")



    <!-- BOTTOM FOOTER STRIP -->




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


</body>