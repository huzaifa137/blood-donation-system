﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Image Gallery | Bootstrap Based Admin Template - Material Design</title>

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

    <!-- Light Gallery Plugin Css -->
    <link href="/Dashboard/MoreAssets/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="/Dashboard/MoreAssets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/Dashboard/MoreAssets/css/themes/all-themes.css" rel="stylesheet" />
</head>

    @include('includes.left-nav-bar')
    <section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    IMAGE GALLERY
                    <small>Taken from <a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">sachinchoolur.github.io/lightGallery</a></small>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GALLERY
                                <small>All pictures taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-1.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/2.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-2.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/3.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-3.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/4.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-4.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/5.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-5.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/6.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-6.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/7.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-7.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/8.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-8.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/9.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-9.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/10.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-10.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/11.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-11.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/12.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-12.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/13.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-13.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/14.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-14.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/15.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-15.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/16.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-16.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/17.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-17.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/18.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-18.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/19.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-19.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="/Dashboard/MoreAssets/images/image-gallery/20.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src="/Dashboard/MoreAssets/images/image-gallery/thumb/thumb-20.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Light Gallery Plugin Js -->
    <script src="/Dashboard/MoreAssets/plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Custom Js -->
    <script src="/Dashboard/MoreAssets/js/pages/medias/image-gallery.js"></script>
    <script src="/Dashboard/MoreAssets/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="/Dashboard/MoreAssets/js/demo.js"></script>
</body>

</html>