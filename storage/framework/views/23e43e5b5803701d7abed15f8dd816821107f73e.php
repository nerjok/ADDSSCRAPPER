<?php $__env->startSection('content'); ?>





<div class="container">
<div class="container-fluid bg-3 text-center">
        
        <div class="row equal-cols">
                        <?php $__currentLoopData = $homepage->channel->item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xs-4">
                                <div class="content">
                                        <div class="panel panel-default">
                                        <div class="panel-body">
                                                
                                                            

                                        
                                    <b><a href="<?php echo e($article->link); ?>"><?php echo e($article->title); ?></a></b>
                                    <?php echo $article->description; ?>

                                    


                        </div></div></div></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>