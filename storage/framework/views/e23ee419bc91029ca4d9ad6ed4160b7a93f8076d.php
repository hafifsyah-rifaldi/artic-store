<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <title><?php echo $__env->yieldContent('title'); ?></title>

    
    <?php echo $__env->yieldPushContent('prepend-style'); ?>
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('addon-style'); ?>
    
</head>

  <body>

    
    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldPushContent('prepend-script'); ?>
    <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('addon-script'); ?>
  </body>
</html>
<?php /**PATH C:\laragon\www\artic-store\resources\views/layouts/success.blade.php ENDPATH**/ ?>