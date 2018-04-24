<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - Supremo Encanto</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/jquery-ui-1.10.4.custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/all.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/main.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/style-responsive.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/zabuto_calendar.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/pace.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles/jquery.news-ticker.css')}}">
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        @include('partials.nav')
        <div id="wrapper">
            @include('partials.sidebar')
          
          
            <div id="page-wrapper">
                @include('partials.breadcrumb')
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    @yield('content')
                </div>
                <!--END CONTENT-->
                @include('partials.footer')
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="{{URL::asset('assets/js/script/jquery-1.10.2.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/html5shiv.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/respond.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.metisMenu.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.slimscroll.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.cookie.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/icheck.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/custom.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.news-ticker.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.menu.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/pace.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/holder.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/responsive-tabs.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.categories.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.tooltip.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/jquery.flot.spline.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/zabuto_calendar.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/index.js')}}"></script>
    <!--LOADING SCRIPTS assetFOR CHARTS-->
    <script src="{{URL::asset('assets/js/script/highcharts.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/data.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/drilldown.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/exporting.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/highcharts-more.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/charts-highchart-pie.js')}}"></script>
    <script src="{{URL::asset('assets/js/script/charts-highchart-more.js')}}"></script>
    <!--CORE JAVASCRIPT-->
    <script src="{{URL::asset('assets/js/script/main.js')}}"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>