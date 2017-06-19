<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-md-4">
		<div class=" outter-box">
			<div style="height: 150px; background: url('<?php echo e(url('')); ?>/images/product/<?php echo e($data->filename); ?>'); background-size: cover;"></div>
			<p class="font-box"><?php echo e($data->product_name); ?></p>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($product->links()); ?>