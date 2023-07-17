<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from emobile.orinostudio.com/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:25:38 GMT -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">

    <meta name="theme-color" content="#ff3f3f">
    <title>eMobile - Multipurpose HTML5 Template</title>
    <meta name="description" content="eMobile - Multipurpose HTML5 Template">
    <meta name="keywords"
        content="bootstrap 4, mobile template, 404, chat, about, cordova, phonegap, mobile, html, ecommerce, shopping, store, delivery, wallet, banking, education, jobs, careers, distance learning" />

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon/32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/img/favicon/favicon192.png">

    <!-- CSS Libraries-->
    @include('assets.css')
    @stack('css')
    <!-- Hotjar Tracking Code for https://emobile.orinostudio.com/preview/index.html -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 2340091, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body class="bg-snow">

    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- End. em_loading -->

    <div id="wrapper">
        <div id="content">
            <!-- Start main_haeder -->
            @include('layouts.header')
            <!-- End.main_haeder -->

            <section class="emPage__public padding-t-70">
                @yield('content')
            </section>


        </div>

        <!-- Start em_main_footer -->
        @include('layouts.footer')
        <!-- End. em_main_footer -->

        <!-- Start searchMenu__hdr -->
        <section class="searchMenu__hdr">
            <form>
                <div class="form-group">
                    <div class="input_group">
                        <input type="search" class="form-control" placeholder="type something here...">
                        <svg class="icon_serach" id="Iconly_Two-tone_Search" data-name="Iconly/Two-tone/Search"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Search" transform="translate(2 2)">
                                <circle id="Ellipse_739" cx="8.989" cy="8.989" r="8.989"
                                    transform="translate(0.778 0.778)" fill="none" stroke="#200e32"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                    stroke-width="1.5" />
                                <path id="Line_181" d="M0,0,3.524,3.515" transform="translate(16.018 16.485)"
                                    fill="none" stroke="#200e32" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" stroke-width="1.5" opacity="0.4" />
                            </g>
                        </svg>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn_meunSearch -close __removeMenu">
                <i class="tio-clear"></i>
            </button>
        </section>
        <!-- End. searchMenu__hdr -->

        <!-- Modal Sidebar Menu -->
        @include('layouts.sidebar')

    </div>

    @include('assets.js')
    @stack('script')
</body>
<!-- Mirrored from emobile.orinostudio.com/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 21:25:49 GMT -->
</html>
