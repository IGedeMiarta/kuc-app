<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - KUC-APP</title>
    <!--favicon-->
    <link rel="icon" href="/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="/css/pace.min.css" rel="stylesheet" />
    <script src="/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/dark-sidebar.css" />
    <link rel="stylesheet" href="/css/dark-theme.css" />
</head>

<body>
    @include('layouts.sidebar')
    @include('layouts.topbar')
    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <div class="footer">
        <p class="mb-0">KUC-APP &copy2021
        </p>
    </div>
    <!-- end footer -->
    </div>
    <!--start switcher-->
    {{-- <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="custom-control custom-radio">
                    <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="darkmode">Dark Mode</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
                    <label class="custom-control-label" for="lightmode">Light Mode</label>
                </div>
            </div>
            <hr />
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="DarkSidebar">
                <label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
            </div>
            <hr />
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="ColorLessIcons">
                <label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
            </div>
        </div>
    </div> --}}
    <!--end switcher-->
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!--plugins-->
    <script src="/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="/js/index2.js"></script>
    <!-- App JS -->
    <script src="/js/app.js"></script>
</body>

</html>
