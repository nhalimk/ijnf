<!doctype html>
<html class="no-js" lang="en" dir="ltr" style="--primary-color:#482ad1;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IJNF Hi-Tea</title>
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">

    <!-- project css file  -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <?= $this->Html->css('/plugin/light-gallery/css/lightgallery.css') ?>
    <?= $this->Html->css('/css/timetracker.style.min.css') ?>
    <?= $this->Html->css('/css/jquery.dataTables.min.css') ?>
    <?= $this->Html->css('/css/responsive.dataTables.min.css') ?>
    <?= $this->Html->css('/css/rowGroup.dataTables.min.css') ?>
    <?= $this->Html->css('/font/font-awesome/css/all.css') ?>
    <?= $this->Html->css('/font/font-awesome/css/fontawesome.css') ?>
    <?= $this->Html->css('/font/font-awesome/css/brands.css') ?>
    <?= $this->Html->css('/font/font-awesome/css/solid.css') ?>
    <?= $this->Html->css('/css/buttons.dataTables.min.css') ?>
    <?= $this->Html->css('/css/jquery-fallr-2.0.1.css') ?>
    <?= $this->Html->css('/css/sweetalert2.min.css') ?>
    <?= $this->Html->css('/plugin/fullcalendar/main.min.css') ?>
    <?= $this->Html->css('/css/pivot.css') ?>

    <?= $this->fetch('meta') ?>
    <style>
        .checkbox label,
        .form-group .radio label,
        .form-group label {
            color: black !important;
        }

        input[type=checkbox] {
            transform: scale(1.5);
        }
    </style>
    <?= $this->fetch('css') ?>
    <?= $this->Html->css('https://www.thecodedeveloper.com/demo/add-datetimepicker-jquery-plugin/css/jquery.datetimepicker.min.css') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.11.0/jquery.typeahead.min.css') ?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css') ?>
    <?= $this->Html->css('https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css') ?>
    <?= $this->Html->css('https://cdn.bootcdn.net/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.css') ?>
    <?= $this->Html->css('https://cdn.bootcdn.net/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.css') ?>
    <script src="//unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
</head>

<body>
    <div id="timetracker-layout" class="theme-dynamic">

        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-5 me-0">
            <div class="d-flex flex-column h-100">
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="/attendances"><i class="icofont-home fs-5"></i> <span>Attendances</span></a></li>
                    <li><a class="m-link" href="/surveys"><i class="icofont-home fs-5"></i> <span>Attendances</span></a></li>
                </ul>

                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">

                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center">
                                <p class="mb-0 mr-4">
                                    <span class="font-weight-bold text-dark mr-4" style="margin-right: 30px !important;">
                                        <?= $auth['name'] ?><br />
                                        <small class="mr-4"><?= $auth['position'] ?><br /></small>
                                        <small class="mr-4"><?= $auth['department'] ?></small>
                                    </span>
                                </p>
                                <a class="ml-4 nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <p class="mb-0">
                                        <span class="font-weight-bold text-dark">
                                            <img class="avatar lg rounded-circle img-thumbnail" src="<?= $auth['photo'] ? $auth['photo']  : 'img/default-avatar.png' ?>" alt="profile">
                                        </span>
                                    </p>
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="<?= $auth['photo'] ? $auth['photo']  : 'img/default-avatar.png' ?>" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold"><?= $auth['name'] ?></span></p>
                                                    <small class=""><?= $auth['position'] ?></small>
                                                    <small class=""><?= $auth['department'] ?></small>
                                                    <small class=""><?= $auth['email'] ?></small>
                                                </div>
                                            </div>

                                            <div>
                                                <hr class="dropdown-divider border-dark">
                                            </div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a class="list-group-item list-group-item-action border-1 text-center font-weight-bold text-dark">
                                                <?= $auth['role'] ?>
                                            </a>
                                            <a href="logout" class="list-group-item list-group-item-action border-0 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" class="me-3">
                                                    <rect xmlns="http://www.w3.org/2000/svg" class="st0" width="24" height="24" style="fill:none;;" fill="none"></rect>
                                                    <path xmlns="http://www.w3.org/2000/svg" d="M20,4c0-1.104-0.896-2-2-2H6C4.896,2,4,2.896,4,4v16c0,1.104,0.896,2,2,2h12  c1.104,0,2-0.896,2-2V4z" style="fill:var(--primary-color);" data-st="fill:var(--chart-color4);"></path>
                                                    <path xmlns="http://www.w3.org/2000/svg" class="st0" d="M15,6.81v2.56c0.62,0.7,1,1.62,1,2.63c0,2.21-1.79,4-4,4s-4-1.79-4-4c0-1.01,0.38-1.93,1-2.63V6.81  C7.21,7.84,6,9.78,6,12c0,3.31,2.69,6,6,6c3.31,0,6-2.69,6-6C18,9.78,16.79,7.84,15,6.81z M13,6.09C12.68,6.03,12.34,6,12,6  s-0.68,0.03-1,0.09V12h2V6.09z"></path>
                                                </svg>Signout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button">
                            <span class="fa fa-bars"></span>
                        </button>

                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-6 col-sm-12 col-12 mb-3 mb-md-0 d-flex align-items-center">
                            <a class=" px-3 mr-4" href="#" title="Menu Option">
                            <iframe src="https://embed.lottiefiles.com/animation/61849"></iframe>
                            </a>
                        </div>

                    </div>
                </nav>

            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxxl">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <?= $this->Html->script('/bundles/libscripts.bundle.js'); ?>

    <!-- Plugin Js -->
    <?= $this->Html->script('/bundles/apexcharts.bundle.js'); ?>
    <?= $this->Html->script('/plugin/light-gallery/js/lightgallery.js'); ?>

    <!-- Jquery Page Js -->

    <!--  Plugin for the Wizard -->

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <?= $this->Html->script('/js/jquery.validate.min.js'); ?>
    <?= $this->Html->script('/js/bootstrap-datepicker.min.js'); ?>
    <?= $this->Html->script('/js/bootstrap-toggle.min.js'); ?>
    <?= $this->Html->script('/js/jquery.dataTables.min.js'); ?>
    <?= $this->Html->script('/js/dataTables.buttons.min.js'); ?>
    <?= $this->Html->script('/js/dataTables.responsive.min.js'); ?>
    <?= $this->Html->script('/js/dataTables.rowGroup.min.js'); ?>
    <?= $this->Html->script('/js/jszip.min.js'); ?>
    <?= $this->Html->script('/js/pdfmake.min.js'); ?>
    <?= $this->Html->script('/js/buttons.html5.min.js'); ?>
    <?= $this->Html->script('/js/jquery-fallr-2.0.1.js'); ?>
    <?= $this->Html->script('/js/plusone.js'); ?>
    <?= $this->Html->script('/js/sweetalert2.all.min.js'); ?>
    <?= $this->Html->script('/js/pivot.js'); ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'); ?>
    <?= $this->Html->script('https://www.thecodedeveloper.com/demo/add-datetimepicker-jquery-plugin/js/jquery.datetimepicker.js'); ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.11.0/jquery.typeahead.min.js'); ?>
    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'); ?>
    <?= $this->Html->script('https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js'); ?>
    <?= $this->Html->script('https://cdn.bootcdn.net/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.js'); ?>
    <?= $this->Html->script('https://cdn.bootcdn.net/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.js'); ?>
    <?= $this->Html->script('/plugin/fullcalendar/main.min.js'); ?>
    <?= $this->Html->script('jspdf.min.js'); ?>
    <?= $this->Html->script('jspdf.debug.js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.13.3/exporting/jspdf.plugin.addimage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

    <?= $this->fetch('script') ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ERCESQSP2Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ERCESQSP2Z');
        $(function() {
            "use strict";

            // main sidebar toggle js
            $('.menu-toggle').on('click', function() {
                $('.sidebar').toggleClass('open');
                $('.open').removeClass('sidebar-mini');
            });

            $('.menu-toggle-option').on('click', function() {
                $('.menu').toggleClass('open');
            });

            $('.body').on('click', function() {
                $('.sidebar').removeClass('open');
            });

            // layout a sidebar mini version
            $('.sidebar-mini-btn').on('click', function() {
                $('.sidebar').toggleClass('sidebar-mini');
                $('.sidebar-mini').removeClass('open');
            });
        });
    </script>


</body>

</html>