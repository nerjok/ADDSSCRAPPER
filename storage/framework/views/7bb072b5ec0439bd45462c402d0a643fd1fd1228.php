<?php $__env->startSection('header'); ?>
  <section class="page1_header">
    <div class="container">
      <div class="row">
        <div class="grid_4">
          <a href="#" class="banner "><div class="maxheight">
            <div class="fa fa-globe"></div>Automatic Search</div>
          </a>
          <a href="#" class="banner "><div class="maxheight">
            <div class="fa fa-lightbulb-o"></div>Inovative</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-cog"></div>Custom feature</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-briefcase"></div>Faster</div>
          </a>
        </div>
        <div class="grid_5">
          
          We help you to be successful in your search way
        </div>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


        <?php echo $__env->make('layouts.docs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!--
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
                           <!-- </div>
                            </div>
</div>
</div>
-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>