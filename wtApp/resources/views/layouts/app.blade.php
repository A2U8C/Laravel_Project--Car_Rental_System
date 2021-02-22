<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!---->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
 <!--=== Bootstrap CSS ===-->
 <link href="/css/css/bootstrap.min.css" rel="stylesheet">
 <!--=== Vegas Min CSS ===-->
 <link href="/css/css/plugins/vegas.min.css" rel="stylesheet">
 <!--=== Slicknav CSS ===-->
 <link href="/css/css/plugins/slicknav.min.css" rel="stylesheet">
 <!--=== Magnific Popup CSS ===-->
 <link href="/css/css/plugins/magnific-popup.css" rel="stylesheet">
 <!--=== Owl Carousel CSS ===-->
 <link href="/css/css/plugins/owl.carousel.min.css" rel="stylesheet">
 <!--=== Gijgo CSS ===-->
 <link href="/css/css/plugins/gijgo.css" rel="stylesheet">
 <!--=== FontAwesome CSS ===-->
 <link href="/css/css/font-awesome.css" rel="stylesheet">
 <!--=== Theme Reset CSS ===-->
 <link href="/css/css/reset.css" rel="stylesheet">
 <!--=== Main Style CSS ===-->
 <link href="/css/style.css" rel="stylesheet">
 <!--=== Responsive CSS ===-->
 <link href="/css/css/responsive.css" rel="stylesheet">



<!---->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="starter-template.css" rel="stylesheet">    
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
</head>
<body>
    <div id="app">
        
            @include('inc.navbar')
            <div class="container">
                    @include('inc.messages')
            @yield('content')
        </div>
    </div>
    
    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="/js/javascript/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="/js/javascript/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="/js/javascript/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="/js/javascript/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="/js/javascript/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="/js/javascript/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="/js/javascript/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="/js/javascript/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="/js/javascript/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="/js/javascript/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="/js/javascript/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="/js/javascript/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="/js/javascript/plugins/slicknav.min.js"></script>


    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!--=== Mian Js ===-->
    <script src="/js/javascript/main.js"></script>


</body>
</html>
