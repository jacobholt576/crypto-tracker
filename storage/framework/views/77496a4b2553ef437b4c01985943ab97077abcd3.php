<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/libs/bootstrap-sortable/bootstrap-sortable.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- Dependencies -->
    <script src="<?php echo e(asset('/vendor/libs/bootstrap-sortable/bootstrap-sortable.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h4 class="font-weight-bold py-3 mb-4">Market</h4>

    <div class="table-responsive">
    <table class="table table-bordered table-striped sortable">
        <thead>
            <tr>
                <th style="width: 20%">Rank</th>
                <th style="width: 20%">Name</th>
                <th style="width: 20%">Price</th>
                <th style="width: 20%">Market Cap</th>
                <th style="width: 20%">Volume(24h)</th>
                <th style="width: 20%">Circulating Supply</th>
                <th style="width: 20%">Change(24h)</th>
            </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $obj['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <th scope="row"><?php echo e($crypto['rank']); ?></th>
                  <td><?php echo e($crypto['name']); ?></td>
                  <td>$<?php echo e(number_format($crypto['quotes']['USD']['price'], 2)); ?></td>
                  <td>$<?php echo e(number_format($crypto['quotes']['USD']['market_cap'])); ?></td>
                  <td>$<?php echo e(number_format($crypto['quotes']['USD']['volume_24h'])); ?></td>
                  <td><?php echo e(number_format($crypto['circulating_supply'])); ?>  <?php echo e($crypto['symbol']); ?></td>
                  <td><?php echo e(number_format($crypto['quotes']['USD']['percent_change_24h'], 2)); ?>%</td>
              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>