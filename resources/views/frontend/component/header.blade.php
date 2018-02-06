<!-- banner -->
@if($homepage)
<div class="banner_top" id="home">
@else
<div class="banner_top innerpage" id="home">
@endif
    <div class="wrapper_top_w3layouts">

        <div class="header_agileits">
            <div class="logo">
                <h1><a class="navbar-brand" href="index.html"><span>Matrix</span> <i>Mall</i></a></h1>
            </div>
            <div class="overlay overlay-contentpush">
                <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

                <nav>
                    <ul>
                        @if(\Illuminate\Support\Facades\Session::get('customer_isLogin'))
                            <li><p>Hi, {{ \Illuminate\Support\Facades\Session::get('customer_name') }}</p></li>
                        @endif
                        <li><a href="/" class="active">Home</a></li>
                        {{--<li><a href="about.html">About</a></li>--}}
                        @if(\Illuminate\Support\Facades\Session::get('customer_isLogin'))
                            <li><a href="/customer/transaction">My Transaction</a></li>
                            <li><a href="/customer/logout">Logout</a></li>
                        @else
                            <li><a href="/customer/login">Login / Register</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="mobile-nav-button">
                <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
            <!-- cart details -->
            <!--<div class="top_nav_right">
                <div class="shoecart shoecart2 cart cart box_1">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>-->
            <!-- //cart details -->
            <!-- search -->
            <div class="search_w3ls_agileinfo">
                <div class="cd-main-header">
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                    </ul>
                </div>
                <div id="cd-search" class="cd-search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="Click enter after typing...">
                    </form>
                </div>
            </div>
            <!-- //search -->

            <div class="clearfix"></div>
        </div>
        <!-- /slider -->
        @if($homepage)
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">

                        <li>
                            <div class="banner-top2">
                                <div class="banner-info-wthree">
                                    <h3>Suppliers</h3>
                                    <br>
                                    <p>We choose only the best suppliers.</p>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top3">
                                <div class="banner-info-wthree">
                                    <h3>Easy</h3>
                                    <br>
                                    <p>Choose your product, and finish your transaction.</p>

                                </div>

                            </div>
                        </li>
                        <!--<li>
                            <div class="banner-top">
                                <div class="banner-info-wthree">
                                    <h3>Sneakers</h3>
                                    <p>See how good they feel.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top1">
                                <div class="banner-info-wthree">
                                    <h3>Adidas</h3>
                                    <p>For All Walks of Life.</p>

                                </div>

                            </div>
                        </li>-->
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        @else
            <div class="services-breadcrumb_w3ls_agileinfo">
                <div class="inner_breadcrumb_agileits_w3">

                    <ul class="short">
                        {{--<li><a href="index.html">Home</a><i>|</i></li>--}}
                        {{--<li>Contact</li>--}}
                    </ul>
                </div>
            </div>
        @endif
        <!-- //slider -->
        <!--<ul class="top_icons">
            <li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

        </ul>-->
    </div>
</div>
<!-- //banner -->