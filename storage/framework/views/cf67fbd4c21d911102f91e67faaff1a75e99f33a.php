<!DOCTYPE html>
<html>
<?php echo $__env->make('customer/master/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body onload="window.print();">
	<div class="col-md-12 rata" style="margin-top: 50px; padding: 20px">
		<p class="judul-berita" style="text-align:center; margin-bottom: 50px"><?php echo e($product[0]->product_name); ?></p>

		<p class="judul-berita">Technical Specification</p>
		<p class="paragraf">
			<?php print $product[0]->product_specification; ?>
		</p>

		<p class="judul-berita">Description</p>
		<p class="paragraf"><?php echo e($product[0]->product_description); ?></p>


		<p class="judul-berita" style="margin-top: 50px">Pictures</p>
		<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<img class="img-responsive" src="<?php echo e(url('')); ?>/images/product/<?php echo e($product[$key]->filename); ?>" style="max-height: 440px; max-width:100%; margin-bottom: 50px">
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</body>
</html>