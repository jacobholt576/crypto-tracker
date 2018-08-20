<?php $__env->startSection('layout-content'); ?>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-1">
    <div class="layout-inner">

        <!-- Layout navbar -->
        <?php echo $__env->make('layouts.includes.layout-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Layout container -->
        <div class="layout-container">
            <!-- Layout sidenav -->
            <?php echo $__env->make('layouts.includes.layout-sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Layout content -->
            <div class="layout-content">

                <!-- Content -->
                <div class="container-fluid flex-grow-1 container-p-y">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- / Content -->

                <!-- Layout footer -->
                <?php echo $__env->make('layouts.includes.layout-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <!-- Layout content -->

        </div>
        <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
</div>
<!-- / Layout wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.application', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>