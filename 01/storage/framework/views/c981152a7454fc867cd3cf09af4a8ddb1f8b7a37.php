<!DOCTYPE html>
<html lang="en">

<style>
  
</style>


<head>
  <title><?php echo $__env->yieldContent('title','z'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/docs.theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>

<body>

<?php $__env->startSection('sidebar'); ?>
    This is the master sidebar.
<?php echo $__env->yieldSection(); ?>
<div class="container">
<?php echo $__env->yieldContent('content'); ?>
</div>
</body>

</html><?php /**PATH C:\Users\z\Documents\GitHub\CS-Laravel\01\resources\views/layouts/app.blade.php ENDPATH**/ ?>