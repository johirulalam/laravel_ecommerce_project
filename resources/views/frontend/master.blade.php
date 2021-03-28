<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>{{config('app.name')}}</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('css/vendor.css')}}">

    <!--====== Utility-Spacing ======-->    
    <link rel="stylesheet" href="{{ asset('css/utility.css')}}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt="">
        </div>
    </div>

   
      <!--====== Main App ======-->
    <div id="app">


        <!--====== Main Header ======-->

           @include('frontend/partials/_header')
        <!--====== End - Main Header ======-->


                     @yield('body-content')


        <!--====== Main Footer ======-->
        @include('frontend/partials/_footer')

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        @include('frontend/partials/look_modal')
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        @include('frontend/partials/cart_modal')
        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->
        @include('frontend.partials.newsletter')
        <!--====== End - Newsletter Subscribe Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="{{ asset('js/vendor.js')}}"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{ asset('js/jquery.shopnav.js')}}"></script>

    <!--====== App ======-->
    <script src="{{ asset('js/app.js')}}"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>