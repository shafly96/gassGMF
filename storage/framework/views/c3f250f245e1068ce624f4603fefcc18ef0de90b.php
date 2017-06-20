<?php $__env->startSection('judul1'); ?>
About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata">
	<div class="tab">
			<button id="">GMF</button>
			<button id="">GASS</button>
	</div>
</div>
<div class="col-md-12 rata">
	<img src="<?php echo e(url('')); ?>/image/gass.jpg" style="width: 100%; height:auto " class="img-responsive">
</div>
<div class="col-md-12 rata">
	<p class="paragraf">
		GMF Aircraft Support Services is the leading ground support equipment maintenance and services in terms of quality, reliability, safety, innovation and network coverage. 

		Offering a comprehensive range of services and products, GASS is able to provide an “all-inclusive” service package in addition to managing Ground Support Equipment.
		<ul>
			<li>Aircraft Maintenance Ground Handling</li>
			<li>Maintenance Ground Support Equipment</li>
			<li>Assembly and Fabrication Ground Support Equipment</li>
			<li>Assembly and Maintenance ULD and Meal Trolley</li>
		</ul>

	</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>