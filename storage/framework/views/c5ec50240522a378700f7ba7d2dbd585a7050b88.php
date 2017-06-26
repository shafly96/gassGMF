<?php $__env->startSection('content'); ?>
<?php if(session('failed')): ?>
    <div class="alert alert-error">
        <?php echo e(session('failed')); ?>

    </div>
<?php endif; ?>
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>