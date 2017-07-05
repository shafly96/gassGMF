<?php $__env->startSection('judul1'); ?>
About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata">
	<div class="tab">
		<button id="gmf" autofocus>GMF</button>
		<button id="gass">GASS</button>
		<button id="fac">Our Facility</button>
		<button id="manager">Our Managers</button>
		<button id="testimoni">Testimoni</button>
	</div>
</div>
<div class="gass">
	<div class="col-md-12 rata">
		<img src="<?php echo e(url('')); ?>/images/about/gass/<?php echo e($testi->about_gass_gambar); ?>" style="width: 100%; height:auto " class="img-responsive">
	</div>
	<div class="col-md-12 rata">
		<p class="paragraf">
			<?php print $testi->about_gass_text; ?>
		</p>
	</div>
</div>



<div class="gmf">
	<div class="col-md-12 rata">
		<img src="<?php echo e(url('')); ?>/images/about/gmf/<?php echo e($testi->about_gmf_gambar); ?>" style="width: 100%; height:auto ">

	</div>
	<div class="col-md-12 rata">
		<p class="paragraf">
			<?php print $testi->about_gmf_text; ?>
		</p>
	</div>
</div>
<div class="fac" style="display:none;">
	<div class="col-md-12 rata">
		<img src="<?php echo e(url('')); ?>/images/about/facility/<?php echo e($testi->about_facility_gambar); ?>" style="width: 100%; height:auto " class="img-responsive">
	</div>
	<div class="col-md-12 rata">
		<p class="paragraf">
			<?php print $testi->about_facility_text; ?>
		</p>
	</div>
</div>
<div class="testimoni">
	<div class="col-md-12 rata" style="padding-top: 50px">
		<div class="col-md-4" style="text-align:center">
		<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('<?php echo e(url('')); ?>/images/about/testi/<?php echo e($testi->about_testimony_g1); ?>'); background-size:cover"></div>
			<p class="paragraf"><strong><?php echo e($testi->about_testimony_n1); ?></strong> <?php echo e($testi->about_testimony_title1); ?></p>
			<p class="paragraf">
				<?php echo e($testi->about_testimony_t1); ?>

			</p>
		</div>
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('<?php echo e(url('')); ?>/images/about/testi/<?php echo e($testi->about_testimony_g2); ?>'); background-size:cover"></div>
			<p class="paragraf"><strong><?php echo e($testi->about_testimony_n2); ?></strong> <?php echo e($testi->about_testimony_title2); ?></p>
			<p class="paragraf">
				<?php echo e($testi->about_testimony_t2); ?>

			</p>
		</div>
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('<?php echo e(url('')); ?>/images/about/testi/<?php echo e($testi->about_testimony_g3); ?>'); background-size:cover"></div>
			<p class="paragraf"><strong><?php echo e($testi->about_testimony_n3); ?></strong> <?php echo e($testi->about_testimony_title3); ?></p>
			<p class="paragraf">
				<?php echo e($testi->about_testimony_t3); ?>

			</p>
		</div>
	</div>
</div>

<div class="manager" style="display:none;">
	<div class="col-md-12 rata" style="padding-top: 50px">
		<?php $__currentLoopData = $manager; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('<?php echo e(url('')); ?>/images/managers/<?php echo e($data->manager_filename); ?>'); background-size:cover"></div>
			<p class="paragraf"><strong><?php echo e($data->manager_nama); ?></strong></p>
			<p class="paragraf" style="margin-top:-10px"><?php echo e($data->manager_jabatan); ?></p>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>
<script>
	$("#gmf").click(function(){
		$(".gmf").show();
		$(".gass").hide();
		$(".testimoni").hide();
		$(".fac").hide();
		$(".manager").hide();
	});

	$("#gass").click(function(){
		$(".gass").show();
		$(".gmf").hide();
		$(".testimoni").hide();
		$(".fac").hide();
		$(".manager").hide();
	});

	$("#testimoni").click(function(){
		$(".testimoni").show();
		$(".gmf").hide();
		$(".gass").hide();
		$(".fac").hide();
		$(".manager").hide();
	});
	$("#fac").click(function(){
		$(".fac").show();
		$(".gmf").hide();
		$(".gass").hide();
		$(".testimoni").hide();
		$(".manager").hide();
	});
	$("#manager").click(function(){
		$(".fac").hide();
		$(".gmf").hide();
		$(".gass").hide();
		$(".testimoni").hide();
		$(".manager").show();
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>