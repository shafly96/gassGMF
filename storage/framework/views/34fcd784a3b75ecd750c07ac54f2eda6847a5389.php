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
<script>
	$("#gmf").click(function(){
		$(".gmf").show();
		$(".gass").hide();
		$(".testimoni").hide();
	});

	$("#gass").click(function(){
		$(".gass").show();
		$(".gmf").hide();
		$(".testimoni").hide();
	});

	$("#testimoni").click(function(){
		$(".testimoni").show();
		$(".gmf").hide();
		$(".gass").hide();
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>