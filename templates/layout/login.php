<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" style="--primary-color:blue;">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="iSurveillance">
    <meta name="author" content="Institut Jantung Negara">
    <title>AGM IJN Club</title>
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

    <?= $this->Html->css('font-awesome.css') ?>
    <!-- ico-font-->
    <?= $this->Html->css('vendors/icofont.css') ?>
    <!-- Themify icon-->
    <?= $this->Html->css('vendors/themify.css') ?>
    <!-- Flag icon-->
    <?= $this->Html->css('vendors/flag-icon.css') ?>
    <!-- Feather icon-->
    <?= $this->Html->css('vendors/feather-icon.css') ?>
    <!-- Plugins css start-->
    <?= $this->Html->css('vendors/scrollbar.css') ?>
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <?= $this->Html->css('vendors/bootstrap.css') ?>
    <!-- App css -->
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('color-1.css') ?>,
    <?= $this->Html->css('responsive.css') ?>,
    <!-- Responsive css-->
</head>

<body style="background-image: url(../media/bg/bg-3.jpg);">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
        </svg>
    </div>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?= $this->Html->image('/img/ijns.png', ['style' => 'max-height : 92px !important;', 'class' => 'ml-4 mr-4']); ?> 
                <?= $this->Html->image('/img/logofinal.png', ['style' => 'max-height : 50px !important;border-left: 1px solid black;border-right: 1px solid black;margin-left: 10px !important;margin-right: 10px !important','class'=>'ml-4 mr-4']); ?>  
                <?= $this->Html->image('/img/ijn-logo.png', ['style' => 'max-height : 60px !important;margin-left: 10px !important']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="card mt-4">
                    <div class="card-header " style="background-color: brown;">
                        <h3 class="text-white font-weight-bold">AGM IJN Club</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <?= $this->fetch('content') ?>
                            </div>
                            <div class="col-md-12 col-lg-6 text-center">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="row ">
                                            <div class="col-12 text-center">
                                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_Tcz0nk.json" background="transparent" speed="1" style="width: 100%; height: 300px;" loop autoplay>
                                                </lottie-player>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>
    <?= $this->Html->script('/js/jquery-3.5.1.min.js'); ?>
    <!-- Bootstrap js-->
    <?= $this->Html->script('/js/bootstrap/bootstrap.bundle.min.js'); ?>
    <!-- feather icon js-->
    <?= $this->Html->script('/js/icons/feather-icon/feather.min.js'); ?>
    <?= $this->Html->script('/js/icons/feather-icon/feather-icon.js'); ?>
    <!-- Sidebar jquery-->
    <?= $this->Html->script('/js/config.js'); ?>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <?= $this->Html->script('/js/script.js'); ?>
</body>

</html>