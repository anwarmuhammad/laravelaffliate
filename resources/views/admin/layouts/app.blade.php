<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Color Admin | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{asset('admin/assets/plugins/jquery-jvectormap/jquery-jvectormap.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('admin/assets/plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
 @include('admin.includes.header')
    <!-- end #header -->

    <!-- begin #sidebar -->
    @include('admin.includes.sidebar')
    <!-- end #sidebar -->

    <!-- begin #content -->
  @yield('content')


    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('admin/assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{asset('admin/assets/crossbrowserjs/html5shiv.js')}}"></script>
<script src="{{asset('admin/assets/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{asset('admin/assets/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->

<script src="{{asset('admin/assets/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard.min.js')}}"></script>
<script src="{{asset('admin/assets/js/apps.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        Dashboard.init();
    });
</script>

</body>
</html>
