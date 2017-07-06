<html>
<head>
<style>
body {

    backgound:gray;
}
</style>
</head>
<body>
<h2>Naujausių skelbimų prenumerata</h2>

<p>Sveiki, dienos skelbimų prenumerata.</p>


<?php if($conte != null): ?>
   <table>
 <?php $__currentLoopData = $conte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
         
              <tr> <td> <b><a href="<?php echo e($entr['href']); ?>"><?php echo e($entr['title']); ?></a></b>

                <?php echo e($entr['description']); ?></td><tr>
           


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php else: ?>
Deja, šiandien naujų skelbimų nėra.
<?php endif; ?>
Sekmės paieškose,<br>
<?php echo e(config('app.name')); ?>

</body>
</html>