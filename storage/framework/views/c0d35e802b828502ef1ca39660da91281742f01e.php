<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-md-4">
		<div class=" outter-box">
			<a href="<?php echo e(url('')); ?>/products/detail/<?php echo e($data->product_id); ?>">
				<div style="height: 150px; background: url('<?php echo e(url('')); ?>/images/product/<?php echo e($data->filename); ?>'); background-size: cover;"></div>
			</a>
			<p class="font-box"><?php echo e($data->product_name); ?></p>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(empty($product[0])): ?>
	<div class="text-center" style="margin-top:50px;">
			<i class="fa fa-2x fa-info-circle" style="color:grey"></i><p style="color:grey;">No data available at this moment</p>
	</div>
<?php endif; ?>
