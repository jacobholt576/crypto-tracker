<?php $__env->startSection('scripts'); ?>
    <!-- Dependencies -->
    <script src="<?php echo e(asset('/vendor/libs/chartjs/chartjs.js')); ?>"></script>

    <script src="<?php echo e(asset('/js/dashboards_dashboard-3.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h4 class="d-flex justify-content-between align-items-center py-2 mb-4">
        <div class="font-weight-bold">Dashboard</div>
    </h4>

    <hr class="border-light container-m--x my-0">

    <!-- Stats block -->
    <div class="row no-gutters row-bordered row-border-light container-m--x">

        <!-- Counters -->
        <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
                <div class="lnr lnr-cart display-4 text-primary"></div>
                <div class="ml-3">
                    <div class="text-muted small">Portfolio Value</div>
                    <div class="text-large">$2362.21</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
                <div class="lnr lnr-earth display-4 text-primary"></div>
                <div class="ml-3">
                    <div class="text-muted small">Profit</div>
                    <div class="text-large">$1300.00</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
                <div class="lnr lnr-gift display-4 text-primary"></div>
                <div class="ml-3">
                    <div class="text-muted small">Acquisition Cost</div>
                    <div class="text-large">$1062.21</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
                <div class="lnr lnr-users display-4 text-primary"></div>
                <div class="ml-3">
                    <div class="text-muted small">Total Trades</div>
                    <div class="text-large">31</div>
                </div>
            </div>
        </div>
        <!-- / Counters -->

        <!-- Payments graph -->
        <div class="col-lg-8 col-xl-9 container-p-x py-4">
            <h5 class="text-muted font-weight-normal mb-4">Current Holdings</h5>

            <div style="height: 200px;">
                <canvas id="statistics-chart-1"></canvas>
            </div>
        </div>
        <!-- / Payments graph -->

        <!-- Payment stats -->
        <div class="d-flex col-lg-4 col-xl-3 container-p-x py-4">
            <div class="align-self-center w-100">
                <div class="mb-4">
                    <span class="text-muted small">Recent Trades</span><br>
                </div>
                <div class="mb-8">
                </div>
            </div>
        </div>
        <!-- / Payment stats -->

    </div>
    <!-- / Stats block -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>