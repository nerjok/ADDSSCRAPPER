<?php $__env->startSection('content'); ?>





<div class="container">
<div class="container-fluid bg-3 text-center">
                                <div class="row">
                            <div class="col-md-6">
                            <h3><?php echo e(__('Adds subscriptions')); ?></h3>
                            <br>
                            <p>No more adds scrolling.</p>
                            <p>Subscribe that is needed.</p>
                            <p>Stay up-to-date.</p>
                            <p>Faster overview.</p>
                            <p>Many adds in one.</p>
                            <p>Higher career occurencies.</p>
                            </div>
                            <div class="col-md-6">
                                    <img src="<?php echo e(asset('img/workstation.png')); ?>"><br>
                           <!-- <a href="http://www.freepik.com/free-vector/i-love-my-job_801922.htm">Designed by Freepik</a> -->
                            </div>
                            </div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>