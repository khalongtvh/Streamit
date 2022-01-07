<!doctype html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streamit</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/typography.css')}}">
    <!-- custom Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <!-- Responsive -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
    <!-- icon  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <header id="main-header">
        <div class="main-header">
            @include('elements.header')
        </div>
    </header>
    <!-- MainContent -->
    <div class="main-content">
        @yield('content')
    </div>

    <footer id="contact" class="footer-one iq-bg-dark">
        <!-- Address -->
        @include('elements.footer')
        <!-- Address END -->
    </footer>

    <!-- MainContent End-->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- jQuery, Popper JS -->
    <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>

    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- Slick JS -->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <!-- owl carousel Js -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- select2 Js -->
    <script src="{{asset('frontend/js/select2.min.js')}}"></script>
    <!-- Magnific Popup-->
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Slick Animation-->
    <script src="{{asset('frontend/js/slick-animation.min.js')}}"></script>
    <!-- Flatpickr JavaScript -->
    <script src="{{asset('frontend/js/flatpickr.min.js')}}"></script>
    <!-- Custom JS-->
    <script src="{{asset('frontend/js/custom.js')}}"></script>

    <script src="{{asset('frontend/js/main.js')}}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>