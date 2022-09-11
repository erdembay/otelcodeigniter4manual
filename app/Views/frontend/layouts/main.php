<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title><?= (isset($title)) ? $title : 'Otel Template'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="assets/images/favicon.png"/>
    <?= $this->include('frontend/layouts/partials/head-css'); ?>
    <?= $this->renderSection('custom-css'); ?>
</head>
<body> 
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->
    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- HEADER -->
        <?= $this->include('frontend/layouts/partials/menu'); ?>
        <!-- END / HEADER -->
        <!-- BANNER SLIDER -->
        <?= (isset($slider) && ($slider===true)) ? $this->include('frontend/layouts/partials/slider') : ''; ?>
        <!-- END / BANNER SLIDER -->
        <!-- CHECK AVAILABILITY -->
        <?= (isset($check_availability) && ($check_availability===true)) ? $this->include('frontend/layouts/partials/check-availability') : ''; ?>
        <!-- END / CHECK AVAILABILITY -->
        <!-- SUB BANNER -->
        <?= (isset($sub_banner) && ($sub_banner===true)) ? $this->include('frontend/layouts/partials/sub-banner') : ''; ?>
        <!-- END / SUB BANNER -->
        <!-- CONTAINER -->
        <?= $this->renderSection('container'); ?>
        <!-- END / CONTAINER -->
        <!-- FOOTER -->
        <?= $this->include('frontend/layouts/partials/footer'); ?>
        <!-- END / FOOTER -->
    </div>
    <!-- END / PAGE WRAP -->
    <!-- LOAD JQUERY -->
    <?= $this->include('frontend/layouts/partials/scripts'); ?>
    <?= $this->renderSection('custom-scripts'); ?>
</body>
</html>