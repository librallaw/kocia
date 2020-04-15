
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login - CeAbuja Ministry Center</title>
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
<div class="theme-layout">

    @include("inc.header")
    <div class="page-top">
        <div class="parallax" style="background:url(images/parallax1.jpg);"></div>
        <div class="container">
            <h1>Login</h1>
        </div>
    </div><!--- PAGE TOP -->




    <section>
        <div class="block remove-gap">
            <div class="container">
                <div class="row" >


                    <div class="col-md-12">


                        @include("alert");

                        <div class="row" >
                            <div class="col-md-3 column"></div><!--- CONTACT INFORMATION -->
                            <div class="col-md-6 column">
                                <div class="title2">
                                    <h2>CE AMC MEMBER  <span>LOGIN FORM</span></h2>
                                    <span>Please fill form correctly with your details. Note that your information is treated with utmost confidentiality
</span>
                                </div>

                                <div class="card">


                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="form-group row mb-0" align="center">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>

                                                    {{--@if (Route::has('password.request'))--}}
                                                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                                            {{--{{ __('Forgot Your Password?') }}--}}
                                                        {{--</a>--}}
                                                    {{--@endif--}}
                                                </div>
                                            </div>
                                            <br />
                                            <br />

                                            <div align="center">Don't have an account? Please click to <a
                                                        href="/register">Register</a></div>
                                        </form>
                                    </div>
                                </div><!--- FORM -->
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
