<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title><?= $this->renderSection('title') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('') ?>/apaxy/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?= base_url('') ?>/apaxy/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url('') ?>/apaxy/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url('') ?>/apaxy/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="<?= base_url('/') ?>"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="<?= base_url('/') ?>" class="logo"><img src="<?= base_url('') ?>/apaxy/images/logo-light.png" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4"><?= $this->renderSection('pageName') ?></h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <?= $this->renderSection('content') ?>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="<?= base_url('') ?>/apaxy/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url('') ?>/apaxy/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('') ?>/apaxy/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url('') ?>/apaxy/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url('') ?>/apaxy/libs/node-waves/waves.min.js"></script>

        <script src="<?= base_url('') ?>/apaxy/js/app.js"></script>

    </body>
</html>
