<?php $__env->startSection('content'); ?>

<div class="panel-heading">Registration Confirmed</div>
<div class="panel-body">
Your Email is successfully verified. Click here to <a href="<?php echo e(url('/login')); ?>">login</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>