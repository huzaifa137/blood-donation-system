<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="/Dashboard/MoreAssets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/Dashboard/MoreAssets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/Dashboard/MoreAssets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/Dashboard/MoreAssets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/Dashboard/MoreAssets/css/style.css" rel="stylesheet">

      <!-- Morris Plugin Js -->
    <script src="/Dashboard/MoreAssets/plugins/raphael/raphael.min.js"></script>
    <script src="/Dashboard/MoreAssets/plugins/morrisjs/morris.js"></script>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/Dashboard/MoreAssets/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Light Gallery Plugin Css -->
    <link href="/Dashboard/MoreAssets/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
</head>


<body class="theme-light-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/Admin">ADMINBSB - MATERIAL DESIGN</a>
            </div>
           
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/Dashboard/MoreAssets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="/Admin/Registration"><i class="material-icons"><span class="material-icons-outlined">
                                account_circle
                                </span></i>Registration</a></li>
                            <li><a href="/Admin/signin"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/Admin">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/Admin/data">Normal Tables</a>
                            </li>
                            <li>
                                <a href="{{ url('Admin/Advancedrecords')}}">Jquery Datatables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{  url('Admin/image-gallery')}}">Image Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/Admin/Morris">Morris</a>
                            </li>
                            <li>
                                <a href="/Admin/flot">Flot</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>

        @yield('content')

</div>
</section>

<!-- Jquery Core Js -->
<script src="/Dashboard/MoreAssets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="/Dashboard/MoreAssets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/raphael/raphael.min.js"></script>------------------
<script src="/Dashboard/MoreAssets/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="/Dashboard/plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/flot-charts/jquery.flot.js"></script>
<script src="/Dashboard/MoreAssets/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="/Dashboard/MoreAssets/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="/Dashboard/MoreAssets/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="/Dashboard/MoreAssets/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Light Gallery Plugin Js -->
<script src="/Dashboard/MoreAssets/plugins/light-gallery/js/lightgallery-all.js"></script>

<!-- Custom Js -->
<script src="/Dashboard/MoreAssets/js/pages/medias/image-gallery.js"></script>
<script src="/Dashboard/MoreAssets/js/admin.js"></script>
<script src="/Dashboard/MoreAssets/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="/Dashboard/MoreAssets/js/demo.js"></script>
</body>

</html>