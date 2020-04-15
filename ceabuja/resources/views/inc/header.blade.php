<header class="header2">

    <div class="topbar">

        <div class="container">

            <div class="header-timer">

                <p>Next Event:</p>

                <ul class="headercounter">

                    <li> <span class="days">00</span>

                        <p class="days_ref">DAYS</p>

                    </li>

                    <li> <span class="hours">00</span>

                        <p class="hours_ref">HOURS</p>

                    </li>

                    <li> <span class="minutes">00</span>

                        <p class="minutes_ref">MINTS</p>

                    </li>

                    <li> <span class="seconds">00</span>

                        <p class="seconds_ref">SECS</p>

                    </li>

                </ul>

            </div>

            <p><i class="fa fa-mobile"></i> 24/7 Support: 123-456-7890</p><!--- CONTACT -->

            <p><i class="fa fa-envelope"></i>  <a href="mailto:me@loveworld360.com">me@loveworld360.com</a></p><!--- EMAIL
			 -->



            <div class="cart-dropdown">

                @guest
                <p><a href="/login"><i class="fa fa-user"></i> Member Login</a></p>
                @else
                    <p><i class="fa fa-user"></i>{{ Auth::user()->first_name }}</p>
                    <ul>

                        <li class="item-number"></li>

                        <li>

                            <span class="remove"><i class="fa fa-key"></i></span>


                            <div align="center">Member ID: </div>
                            <h1 align="center" class="alert alert-info"><a style="font-size:20px;color:black;">{{
                            Auth::user()
                            ->unique_id }}</a></h1>

                        </li>


                        <li align="center">

                            <a class="cart-drop-btn" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>

                    </ul>

                    @endguest

            </div>

        </div>

    </div><!--- TOP BAR -->

    <nav class="style1">

        <div class="container">

            <div class="logo">

                <a href="/" title=""><img src="images/logo.png" alt="" /></a>

            </div><!--- LOGO -->

            <ul>

                <li class="menu-item"><a href="/" title="">Home</a>

                </li>

                <li class="menu-item"><a href="/about" title="">About Us</a>
                </li>

               @guest
                <li class="menu-item-has-children"><a title="">Members</a>

                    <ul>

                        <li><a href="/login" title="">Sign In as a Member</a></li>

                        <li><a href="/register" title="">Create a Membership Account</a></li>

                    </ul>

                </li>

                    @endguest

                <li class="menu-item"><a href="/live" title="">Watch Live</a>
                </li>

                <li class="menu-item-has-children"><a title="">Givings</a>

                    <ul>

                        <li><a href="{{route("members_givings")}}" title="">Members Givings</a></li>

                        <li><a href="{{route("guest_givings")}}" title="">Guest Givings</a></li>

                    </ul>

                </li>


                <li class="menu-item-has-children"><a title="">Church Ministry</a>

                <ul>

                <li><a href="/cell-ministry" title="">Cell Ministry</a></li>

                <li><a href="/foundation-school" title="">Foundation School</a></li>

                </ul>

                </li>

                <li><a href="/contact" title="">Contact</a></li>

            </ul>



        </div>

    </nav>

</header>

<div class="responsive-header">

    <div class="responsive-prayer">

        <p>Next Event:</p>

        <ul class="headercounter">

            <li><span class="days">00</span><p class="days_ref">DAYS</p></li>

            <li><span class="hours">00</span><p class="hours_ref">HOURS</p></li>

            <li><span class="minutes">00</span><p class="minutes_ref">MINTS</p></li>

            <li><span class="seconds">00</span><p class="seconds_ref">SECS</p></li>

        </ul>

    </div><!-- Responsive Prayer -->

    <div class="responsive-contact">

		<span>

			<p class="responsive-phone"><i class="fa fa-phone"></i> 24/7 Support: 12345678</p>

			<p class="responsive-mail"><i class="fa fa-envelope"></i> <a href="mailto:me@loveworld360.com">me@loveworld360.com</a></p>

		</span>

        <a class="phone-btn active" href="#" title=""><i class="fa fa-phone"></i></a>

        <a class="mail-btn" href="#" title=""><i class="fa fa-envelope"></i></a>

    </div><!-- Responsive Contact -->

    <!-- Responsive Contact -->

    <div class="responsive-extras">



        <div class="responsive-social" style="color:white;">

            @guest

            @else
                Member ID: {{Auth::user()->unique_id }}
                @endguest

        </div><!-- Responsive Social -->

        <div class="responsive-cart"><a href="/login" ><i class="fa fa-user"> Member Login</i></a>
            @guest

            @else
                {{Auth::user()->title." ".ucfirst(strtolower(Auth::user()->first_name))." ".ucfirst(strtolower
                (Auth::user()->last_name)) }}
                @endguest</div>

    </div><!-- Responsive Extras -->

    <div class="responisve-bar">

        <div class="responsive-logo"><a href="/" title=""><img src="images/logo.png" alt="" /></a></div>

        <span class="responsive-btn"><i class="fa fa-list"></i></span>

    </div>

</div>


<div class="responsive-menu">

    <ul>

        <li class="menu-item"><a href="/" title="">Home</a>

        </li>

        <li class="menu-item"><a href="/about" title="">About Us</a>
        </li>


        <li class="menu-item"><a href="/live" title="">Connect to Service</a>
        </li>

        <li class="menu-item"><a href="/givings" title="">Givings</a>
        </li>

        <li class="menu-item-has-children"><a title="">Church Ministry</a>

            <ul>

                <li><a href="/cell-ministry" title="">Cell Ministry</a></li>

                <li><a href="/foundation-school" title="">Foundation School</a></li>

            </ul>

        </li>

        <li><a href="/contact" title="">Contact</a></li>

        @guest

        <li class="menu-item-has-children"><a title="">Members</a>

            <ul>

                <li><a href="/login" title="">Sign In as a Member</a></li>

                <li><a href="/register" title="">Create Membership Account</a></li>

            </ul>

        </li>
        @else
        <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></li>
        @endguest



    </ul>

</div>