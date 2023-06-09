<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <title>IJNF Hi-Tea</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'>
        <?= $this->Html->css('eventstyle.css') ?>
        <?= $this->Html->css('/font/font-awesome/css/all.css') ?>
        <?= $this->Html->css('/font/font-awesome/css/fontawesome.css') ?>
        <?= $this->Html->css('/font/font-awesome/css/brands.css') ?>
        <?= $this->Html->css('/font/font-awesome/css/solid.css') ?>
        <?= $this->Html->css('/css/buttons.dataTables.min.css') ?>
        <?= $this->Html->css('/css/jquery-fallr-2.0.1.css') ?>
        <?= $this->Html->css('/css/sweetalert2.min.css') ?>
        <script src="//unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
                <!--begin::Authentication - Sign-up -->
                <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
                        <div class="row">
                                <div class="col-12 text-center">
                                        <?= $this->fetch('content') ?>
                                </div>
                        </div>

                        <footer class="text-white text-center">
                                <div class="align-items-center text-center">
                                        <small><i>Institut Jantung Negara (IJN) 2023. All rights reserved.</i></small>
                                </div>
                        </footer>
                        <!--end::Footer-->
                </div>
                <!--end::Authentication - Sign-up-->
        </div>
        <!--end::Root-->
        <!--end::Main-->
        <!--begin::Javascript-->
        <script>
                var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(used by all pages)-->

        <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
        

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
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
</body>
<!--end::Body-->

</html> <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
</body>
<!--end::Body-->

</html>