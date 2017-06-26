<!-- here is user sbscription list -->
<?php $__env->startSection('content'); ?>
<br>




 
 <?php if($mySubs->myAdds != null): ?>
<table class="table">
    <thead>
        <th>#</th>
        <th><?php echo e(__('Subscribed')); ?></th>
        <th><?php echo e(__('Subscription url')); ?></th>
        <th><?php echo e(__('Actions')); ?></th>
    </thead>
    <tbody>
<?php $__currentLoopData = $mySubs->myAdds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
    <td>*</td>
    <td><?php echo e($sub->created_at); ?></td>
    <td><?php echo e($sub->subscription); ?></td>
    <td><a href="delete/<?php echo e($sub->id); ?>"><?php echo e(__('Unsubscribe')); ?></a></td>
</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>