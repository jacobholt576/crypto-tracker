<?php $__env->startSection('content'); ?>
    <h1 align="center">Create Portfolio</h1>
    <br><br>
    <form action="<?php echo e(route('portfolio.create')); ?>" method="post">
        <div class="form-group" align="center">
            <div class="form-group">
                <label>Portfolio Name</label>
                <input  name="name">
            </div>
        </div>
        <div class="form-group" align="center">
            <div class="form-group">
                <label>Description</label>
                <input name="description">
            </div>
        </div>
        <div class="form-group" align="center">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>