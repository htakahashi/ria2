<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Pups</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">


  </head>

  <body>

<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<hr>
<hr>
<hr>

<div class="container">

<?php echo $__env->yieldContent('content'); ?>

</div>

<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </body>
</html>
