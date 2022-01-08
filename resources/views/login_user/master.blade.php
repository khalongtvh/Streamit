<!doctype html>
<html lang="en-US">

<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Đăng Nhập</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{asset('frontend/css/typography.css')}}">
   <!-- Style -->
   <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
   <!-- Responsive -->
   <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
</head>

<body>

   <!-- loader Start -->
   <!-- <div id="loading">
      <div id="loading-center">
      </div>
   </div> -->
   <!-- loader END -->
   <!-- MainContent -->
   <section class="sign-in-page">
      <div class="container">
         <div class="row justify-content-center align-items-center height-self-center">
            @yield('content');
         </div>
      </div>
   </section>
   <!-- MainContent End-->

   <!-- back-to-top End -->
   <!-- jQuery, Popper JS -->
   <script src="js/jquery-3.4.1.min.js"></script>
   <script src="js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Slick JS -->
   <script src="js/slick.min.js"></script>
   <!-- owl carousel Js -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- select2 Js -->
   <script src="js/select2.min.js"></script>
   <!-- Magnific Popup-->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- Slick Animation-->
   <script src="js/slick-animation.min.js"></script>
   <!-- Custom JS-->
   <script src="js/custom.js"></script>
</body>

</html>