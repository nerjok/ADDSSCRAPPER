<?php $__env->startComponent('mail::message'); ?>
Hi, there

You have'got this email becouse someone has subscribed adds at our;s site, please ignore, if that weren't you.

<h1>Click the Link To Verify Your Email</h1>
Click the following link to verify your email <a href="<?php echo e(url('/verife/'.$email_token)); ?>">Confirmation link</a>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
