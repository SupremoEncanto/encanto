<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
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
    @include('partials.scripts')
</body>
</html>