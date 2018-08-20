<!DOCTYPE html>

<html lang="<?php echo e(app()->getLocale()); ?>" class="default-style">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title><?php echo e(isset($title) ? $title.' - ' : ''); ?>Laravel Starter</title>

    <!-- Main font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/fonts/fontawesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/fonts/ionicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/fonts/linearicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/fonts/open-iconic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/fonts/pe-icon-7-stroke.css')); ?>">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/css/appwork.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/css/theme-corporate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/css/colors.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/css/uikit.css')); ?>">

    <!-- Layout helpers -->
    <script src="<?php echo e(asset('/vendor/js/layout-helpers.js')); ?>"></script>

    <!-- Libs -->

    <!-- `perfect-scrollbar` library required by SideNav plugin -->
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>">

    <?php echo $__env->yieldContent('styles'); ?>

    <!-- Application stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/application.css')); ?>">

</head>
<body>

    <?php echo $__env->yieldContent('layout-content'); ?>

    <!-- Core scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('/vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendor/js/sidenav.js')); ?>"></script>

    <!-- Libs -->

    <!-- `perfect-scrollbar` library required by SideNav plugin -->
    <script src="<?php echo e(asset('/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>

    <!-- Application javascripts -->
    <script src="<?php echo e(asset('/js/application.js')); ?>"></script>

</body>
</html>
