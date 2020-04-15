<!DOCTYPE html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>About - CeAbuja Ministry Center</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="" />

<meta name="keywords" content="" />



<!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic" rel='stylesheet' type='text/css'>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic" rel='stylesheet' type='text/css'>

<!-- Styles -->

<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/owl-carousel.css" type="text/css" />

<link rel="stylesheet" href="css/mediaelementplayer.min.css" />

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

		<h1>ABOUT <span>US</span></h1>



	</div>

</div>



<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-6 column">

					<div class="simple-text">

						<h3>WHO WE ARE AND WHAT IS OUR MISSION?</h3>

						<p>The church started with a prayer group led by Chris Oyakhilome, at Ambrose Alli University, Ekpoma, while he was studying architecture in 1987.
							The church celebrated its 30-year anniversary in November 2017.

							The church has approximately 13,000,000 followers worldwide.
							Several other ministries around the world participate in its programs and conferences
							like the International Pastors and Partners Conference (IPPC) which holds every November
							in Lagos, Nigeria; the International Cell Leaders'
							Conference (ICLC) which holds in the middle of the year; the International School of Ministry; the Healing School, etc.</p>

						<a class="button" href="https://christembassy.org/about-pastor-chris/" title="">Read More
							</a>

					</div>

				</div>

				<div class="col-md-6 column">

					<div class="video">

						<div class="video-img">

							<img src="images/resource/video.jpg" alt="" />



						</div>

					</div><!-- VIDEO -->

				</div>

			</div>

		</div>

	</div>

</section>





<section>

	<div class="block blackish">

	<div class="parallax" style="background:url(images/parallax3.jpg);"></div>

		<div class="container">

			<div class="row">

				<div class="col-md-12 column">

				</div>

			</div>

		</div>

	</div>

</section>



<section>

	<div class="block">

		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<section>

						<div class="block remove-gap">

							<div class="container">

								<div class="row">

									<div class="col-md-4 column">
										<div class="title">
											<h2><span>MISSION</span></h2>
										</div>
										<div class="service-block">

											<div class="service-image">

												<img src="images/resource/thumbs_announce.jpg" alt="">

												<i class="fa fa-codepen"></i>

											</div>
											<p>To raise generations of men and women who will come into their inheritance to fulfill God's dream.</p>

										</div>

									</div>



									<div class="col-md-4 column">
										<div class="title">
											<h2><span>VISION</span></h2>
										</div>

										<div class="service-block">

											<div class="service-image">

												<img src="images/resource/thumbs_events.jpg" alt="">

												<i class="fa fa-vine"></i>

											</div>

											<p>To take the divine presence of God to the nations and peoples of the world; and to demonstrate the character of the Spirit.</p>

										</div>

									</div>



									<div class="col-md-4 column">
										<div class="title">
											<h2><span>PURPOSE</span></h2>
										</div>

										<div class="service-block">

											<div class="service-image">

												<img src="images/resource/thumbs_live.jpg" alt="">

												<i class="fa fa-stumbleupon"></i>

											</div>

											<p>To bring them into their inheritance.</p>

										</div>

									</div>



								</div>

							</div>

						</div>

					</section>

				</div>

			</div>

		</div>

	</div>

</section>



<!-- FOOTER -->



@include("inc.footer")<!-- BOTTOM FOOTER STRIP -->









</div>



	<!-- SCRIPTS-->

	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/modernizr.custom.17475.js"></script>



	<script src="js/jquery.1.10.2.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.poptrox.min.js" type="text/javascript"></script>

	<script src="js/enscroll-0.5.2.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>

	<script src="js/mediaelement-and-player.min.js"></script>

    <script src="js/script.js"></script>

    <script src="js/styleswitcher.js"></script>

	<script type="text/javascript" src="js/jquery.downCount.js"></script> 



    <script type="text/javascript">

    $(document).ready(function() {

		$(".pastors-carousel").owlCarousel({

			autoPlay: 5000,

			slideSpeed:1000,

			singleItem : true,

			transitionStyle : "fadeUp",		

			navigation : false

		}); /*** PASTORS MESSAGE CAROUSEL ***/



		$(".team-carousel").owlCarousel({

			autoPlay: 8000,

			rewindSpeed : 3000,

			slideSpeed:2000,

			items : 4,

			itemsDesktop : [1199,3],

			itemsDesktopSmall : [979,2],

			itemsTablet : [768,2],

			itemsMobile : [479,1],

			navigation : false,

		}); /*** TEAM CAROUSEL ***/



	});    



				$('audio,video').mediaelementplayer();



    </script>


@include("inc.scripts")



</body>