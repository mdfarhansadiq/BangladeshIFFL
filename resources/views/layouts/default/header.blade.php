<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $title?$title.' || ':'' }} BIFFL</title>
    <meta name="description" content="Bangladesh Infrastructure Finance Fund Limited (BIFFL) is a Government-owned Non-Banking Financial Institution, operating since 2011." />

    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/images/bifflfavicon.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/animate.css">
    <!-- aos css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/aos.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/linea-fonts.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/flaticon.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/rsmenu-main.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/inc/custom-slider/css/preview.css">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/rsmenu-transitions.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->

    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/custom.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/supperresponsive.css">
    <script src="{{ asset('frontend') }}/js/custom.js"></script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M4EZLQTLBR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M4EZLQTLBR');
</script>



</head>
<body  class="defult-home">

<!-- Preloader area start here -->
<div id="loader" class="loader">
    {{-- <div class="spinner"></div> --}}
    <img src="/uploads/images/loader.gif" alt="" style="width:100px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%);">

</div>
<!--End preloader here -->
<script>
    $(document).ready(function(){
        function one(func) {
          return function () {
             func && func.apply(this, arguments);
             func = null;
          }
        }



        var x = 0;

        var initializer= one( _ =>{
                var x =+ 1;
              console.log('initializing'+x);
              localStorage.removeItem('supper_parent_id');
        });
        initializer();
    });

</script>


@include('layouts.default.navigation_new')




