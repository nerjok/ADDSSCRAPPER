<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-3 text-center">


aaa


<?php $__currentLoopData = $contentt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
<p>
<a href="<?php echo e($entr['href']); ?>"><?php echo e($entr['title']); ?></a><br>

<?php echo e($entr['description']); ?></p>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>