<!doctype html>
<html class="no-js" lang="">
<head>
    @include('includes.head')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                @include('includes.headertop')
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                @include('includes.mainmenu')
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    
    @yield('content')

    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @include('includes.footer')
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="../notika/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../notika/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../notika/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../notika/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../notika/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../notika/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../notika/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="../notika/js/counterup/jquery.counterup.min.js"></script>
    <script src="../notika/js/counterup/waypoints.min.js"></script>
    <script src="../notika/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../notika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="../notika/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../notika/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../notika/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../notika/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../notika/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="../notika/js/flot/jquery.flot.js"></script>
    <script src="../notika/js/flot/jquery.flot.resize.js"></script>
    <script src="../notika/js/flot/curvedLines.js"></script>
    <script src="../notika/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="../notika/js/knob/jquery.knob.js"></script>
    <script src="../notika/js/knob/jquery.appear.js"></script>
    <script src="../notika/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="../notika/js/wave/waves.min.js"></script>
    <script src="../notika/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="../notika/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../notika/js/plugins.js"></script>

     <!-- Data Table JS
        ============================================ -->      
    <script src="../notika/js/data-table/jquery.dataTables.min.js"></script>
    <script src="../notika/js/data-table/data-table-act.js"></script>


	<!--  Chat JS
		============================================ -->
    <script src="../notika/js/chat/moment.min.js"></script>
    <script src="../notika/js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../notika/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="../notika/js/tawk-chat.js"></script>
</body>

</html>