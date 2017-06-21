<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.master.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">After Sale Details</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form >
				<div class="box-body">
          <?php if(isset($aftersales)): ?>
					<div class="form-group">
						<label for="exampleInputPassword1">Company Name</label>
            <p><?php echo e($aftersales->as_company_name); ?></p>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contact Name</label>
            <p><?php echo e($aftersales->as_contact_name); ?></p>

					</div>
          <div class="form-group">
            <label for="exampleInputPassword1">E-mail</label>
            <p><?php echo e($aftersales->as_email); ?></p>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Machine Serial Number</label>
            <p><?php echo e($aftersales->as_contact_name); ?></p>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Product Type</label>
            <p><?php if($aftersales->as_product_type==1): ?>
                Assembly and Fabrication
              <?php elseif($aftersales->as_product_type==2): ?>
                Service
              <?php elseif($aftersales->as_product_type==3): ?>
                Maintenance
              <?php else: ?>
                Rental
              <?php endif; ?></p>

          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <?php if($aftersales->as_out == 1): ?>
            <p>Machine out of service</p>
            <?php else: ?>
            <p>Machine active</p>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <p><?php echo e($aftersales->as_description); ?></p>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Receipt At</label>
            <p><?php echo e($aftersales->as_timestamp); ?></p>
          </div>
          <?php if(isset($gambar[0])): ?>
          <div class="form-group">
            <label for="exampleInputPassword1">Pictures</label>
            <div class="col-md-12">
              <?php $__currentLoopData = $gambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gbr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="col-md-4 col-xs-12">
                <div class="thumbnail" style="height:150px; overflow:hidden;">
                    <a target="_blank"href="<?php echo e(url('/')); ?>/images/aftersales/<?php echo e($gbr->filename); ?>"><img class="img-thumbnail" style="border:none;" height="150"width="150" src="<?php echo e(url('/')); ?>/images/aftersales/<?php echo e($gbr->filename); ?>"></a>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

          </div>
          <?php endif; ?>

          <?php endif; ?>
				</div><!-- /.box-body -->
			</form>
		</div><!-- /.box -->
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>