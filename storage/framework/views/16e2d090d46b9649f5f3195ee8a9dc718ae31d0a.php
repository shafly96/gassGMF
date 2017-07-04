<?php $__env->startSection('judul1'); ?>
News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata">
    <p class="judul-berita"><?php echo e($news->berita_title); ?></p>
    <p class="tanggal"><?php echo e($news->berita_date); ?></p>
	<img src="<?php echo e(url('')); ?>/images/news/<?php echo e($news->berita_filename); ?>" style="width: 100%; height:auto " class="img-responsive">
</div>
<div class="col-md-12 rata rata-kiri">
	<p class="paragraf">
		<?php print $news->berita_text; ?>
	</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>