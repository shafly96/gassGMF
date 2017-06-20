<?php $__env->startSection('judul1'); ?>
News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata" style="padding-top: 50px">

	<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="div2" style="margin-bottom: 50px">
			<div class="col-md-5">
				<img src="<?php echo e(url('')); ?>/images/news/<?php echo e($data->berita_filename); ?>" class="img-responsive">
			</div>
			<div class="col-md-7">
				<p class="judul-berita"><?php echo e($data->berita_title); ?></p>
				<p class="tanggal"><?php echo e($data->berita_date); ?></p>
				<p class="paragraf">
					<?php 
					if (strlen($data->berita_text) > 170) {
						$trimstring = substr($data->berita_text, 0, 270);
					} else {
						$trimstring = $data->berita_text;
					}
					echo $trimstring;
					?>
				</p>
				<p class="paragraf"><a href="<?php echo e(url('')); ?>/news/detail/<?php echo e($data->berita_id); ?>">Read more ..</a></p>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($news->links()); ?>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>