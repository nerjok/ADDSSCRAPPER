<!-- Here is a forms wher users adds their subscription wishes, 
we validating, checking if available -->

<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-3 text-center">


<form method="POST" action="work">
                        <?php echo e(csrf_field()); ?>


  <div class="form-group">
    <label for="exampleInputEmail1"><?php echo e(__('Enter subscription url')); ?></label>
    <input type="text" class="form-control" name="addUrl" id="addUrl" placeholder="<?php echo e(__('Enter subscription url')); ?>" value="<?php echo e(old('addUrl')); ?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>