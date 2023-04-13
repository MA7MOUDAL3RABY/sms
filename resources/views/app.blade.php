<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    @notifyCss
</head>

<body>
    <div class="wrapper">

        <!--================== preloader ================== -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--================== preloader ================== -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--================== Main content ================== -->
        <div class="content-wrapper position-relative">

            @yield('page-header')

            @yield('content')

            <!--================== wrapper ================== -->

            <!--================== footer ================== -->
            @include('layouts.footer')
        </div>
        <!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--================== footer ================== -->
    <x-notify::notify />
    @include('layouts.footer-scripts')
    @notifyJs
</body>

</html>
