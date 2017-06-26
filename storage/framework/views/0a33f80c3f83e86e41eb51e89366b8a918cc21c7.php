<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-3 text-center">



 
<?php if($link != null): ?>

<a href="<?php echo e($link); ?>"><?php echo e($link); ?></a>
<br>
<?php echo e(__('Do you wish to subscribe these adds?')); ?>


<form method="POST" action="subSave">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PUT')); ?>

  <div class="form-group">
    <label for="exampleInputEmail1"><?php echo e(__('Enter email')); ?></label>
    <input type="hidden" name="subscription" value="<?php echo e($link); ?>">
    <input type="email" class="form-control" name="email" id="addUrl" placeholder="<?php echo e(__('Enter email')); ?>" value="<?php echo e(old('email')); ?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>



        <?php if($conte != null): ?>
        <?php $__currentLoopData = $conte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <p>
                <b><a href="<?php echo e($entr['href']); ?>"><?php echo e($entr['title']); ?></a></b><br>

                <?php echo e($entr['description']); ?>

            </p>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
<?php else: ?>

<p><?php echo e(__('Unavailable page')); ?> </p>

<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>