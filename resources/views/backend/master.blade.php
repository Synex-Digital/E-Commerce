<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 14:53:45 GMT -->
<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="{{ asset('backend') }}/assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
   @include('backend.include.sidebar')
    <main class="main-wrap">
       @include('backend.include.header')
        @yield('content')
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                    document.write(new Date().getFullYear())
                    </script> ©, Evara - HTML Ecommerce Template .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="{{ asset('backend') }}/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendors/select2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendors/chart.js"></script>
    <!-- Main Script -->
    <script src="{{ asset('backend') }}/assets/js/main.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/js/custom-chart.js" type="text/javascript"></script>
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 14:54:06 GMT -->
</html>