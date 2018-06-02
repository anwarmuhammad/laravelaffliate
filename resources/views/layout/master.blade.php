
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative Responsive Bootstrap Multi-Purpose HTML Template">
    <meta name="keywords" content="H2O, Creative, Agency, Portfolio, Freelancer, Shop, Store,Bootstrap, HTML, Template, One page">
    <meta name="author" content="Vadzim Liashkevich">

    <!-- SITE TITLE -->
    <title>Responsive HTML Template</title>

    <!-- =========================
          FAV AND TOUCH ICONS
    ============================== -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.html')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/apple-touch-icon-72x72.html')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/apple-touch-icon-114x114.html')}}">

    <!-- =========================
         STYLESHEETS
    ============================== -->

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/master.css')}}" />

</head>

<body data-spy="scroll" data-target=".navbar">

<div class="preloader" id="preloader">
    <img src="images/preloader.gif" alt="" />
</div>

@include('includes.header')
{{--Slider--}}

@yield('content')
@include('includes.footer')
<div class="totop" id="totop">
    <i class="fa fa-angle-up"></i>
</div>
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />

<!-- =========================
     SCRIPTS
============================== -->
<!-- JQUERY -->
<script src="{{asset('frontend/js/jquery-2.2.0.min.js')}}"></script>

<!-- BOOTSTRAP -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- SLIDER PRO -->
<script src="{{asset('frontend/js/jquery.sliderPro.min.js')}}"></script>

<!-- LIGHTBOX -->
<script src="{{asset('frontend/js/jquery.fancybox.pack.js')}}"></script>

<!-- CAROUSEL -->
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>

<!-- STAR RATING -->
<script src="{{asset('frontend/js/jquery.barrating.min.js')}}"></script>

<!-- ISOTOPE FILTER -->
<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>

<!-- SCROLLSPY -->
<script src="{{asset('frontend/js/scrollspy.js')}}"></script>

<!-- DATEPICKER -->
<script src="{{asset('frontend/js/moment.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- FORM VALIDATOR -->
<script src="{{asset('frontend/js/jquery.form-validator.js')}}"></script>

<!-- SELECT STYLING -->
<script src="{{asset('frontend/js/jquery.selectBox.js')}}"></script>

<script src="{{asset('frontend/js/matchHeight.js')}}"></script>

<!-- JQUERY FORM -->
<script src="{{asset('frontend/js/jquery.form.js')}}"></script>
<!-- IMAGES LOADED -->
<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>

<!-- CUSTOM SCRIPT -->
<script src="{{asset('frontend/js/theme.js')}}"></script>

<!-- GOOGLE MAPS -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC1N87a_NHjocaepKKcovPAYTMUkJBr9pQ&amp;language=en&amp;sensor=true"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-85192583-2', 'auto');
    ga('send', 'pageview');

</script>

</body>

</html>
<!-- =========================
  END FOOTER
============================== -->