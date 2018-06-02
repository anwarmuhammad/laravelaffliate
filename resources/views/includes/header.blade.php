<div class="top-bar" id="top-bar">
    <div class="container">
        <div class="row">

            <!-- TOP BAR LEFT -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="top-bar-adress" style="color: #fff;">
                    <i class="flaticon-navigation-arrow"></i> Henderson Blvd PO Box 356012, Tampa, FL 54452
                </div>
            </div>

            <!-- TOP BAR RIGHT -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="top-bar-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                </div>
                <div class="top-bar-mail">
                    <i class="fa fa-envelope"></i> <a href="#">office@gmail.com</a>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="header" id="header">
    <div class="container">
        <div class="row">

            <!-- HEADER LOGO -->
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="header-logo">
                    <a href="{{ url('/') }}"><img src="images/logo.svg" alt="" />
                        <span class="bold600 color-child-6">LOGO</span>
                    </a>
                </div>
            </div>

            <!-- HEADER BUTTONS -->
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div class="header-button">
                    <a style="line-height: 8px; font-size: 12px;" href="http://www.aishodo.com/" class="fancybox-2 btn btn-default"><span class="plus">+</span> VISIT OUR STORE</a>
                </div>
                <div style=" margin-top: 2px;    font-size: 12px; padding-top: 0px;margin-top: 4px;" class="header-phone">
                    <i style="top: 4px; left: -3px;" class="fa fa-phone"></i> 120 852-4632
                </div>
            </div>


        </div>
    </div>
</div>
<!-- =========================
     END HEADER
============================== -->
<div class="top-menu" id="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-bar-cont">
                    <div class="top-menu-logo">
                        <a href="#"><img src="frontend/images/logo.svg" alt="" />
                            <span class="bold600 color-child-6">LOGO</span>
                        </a>
                    </div>
                    <div class="mobile-bar">
                        <div class="show-menu" id="show-menu">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="color-sw-open-1" id="color-sw-open-1">
                            <i class="fa fa-gear"></i>
                        </div>
                    </div>
                </div>

                <ul class="nav navbar-nav">

                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="{{ Request::is('products') ? 'active' : '' }}"><a href="{{URL::to('products')}}">PRODUCTS</a></li>
                    <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{URL::to('blog')}}">BLOG</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{URL::to('about')}}">ABOUT</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{URL::to('contact')}}">CONTACT</a></li>

                </ul>
                <div class="top-menu-logo">
                    <div class="header-button" style="margin-top: -1px;">
                        <a style="line-height: 8px; font-size: 12px;" href="http://www.aishodo.com/" class="fancybox-2 btn btn-default"><span class="plus">+</span> Visit Our Store</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>