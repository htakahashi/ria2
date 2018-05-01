<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
	<div class="container">
	<?php echo $__env->make('partials.headerNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</body>
</html>