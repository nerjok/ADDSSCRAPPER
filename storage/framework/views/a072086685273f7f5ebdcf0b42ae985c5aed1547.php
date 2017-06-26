<?php $__env->startComponent('mail::message'); ?>
# Introduction

The body of your message.

<h1>Click the Link To Verify Your Email</h1>
Click the following link to verify your email <a href="<?php echo e(url('/verify/'.$email_token)); ?>">Confirmation link</a>


<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
