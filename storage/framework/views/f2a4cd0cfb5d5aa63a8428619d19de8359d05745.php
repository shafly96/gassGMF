<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
		<div class="alert alert-success">
				<?php echo e(session('success')); ?>

		</div>
<?php endif; ?>
<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">Edit Product</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?php echo e(url('/')); ?>/products/update/<?php echo e($update->product_id); ?>" enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">Product Name</label>
						<input type="text" class="form-control" name="nama" placeholder="Insert product name" value="<?php echo e($update->product_name); ?>" required>
					</div>
          <div class="form-group">
						<label for="exampleInputPassword1">Product Type</label>
            <select class="form-control" name="tipe">
                <option value="1" <?php if($update->product_tipe ==1): ?>selected <?php endif; ?>>Assembly and Fabrication</option>
                <option value="2" <?php if($update->product_tipe ==2): ?>selected <?php endif; ?>>Service</option>
                <option value="3" <?php if($update->product_tipe ==3): ?>selected <?php endif; ?>>Maintenance</option>
                <option value="4" <?php if($update->product_tipe ==4): ?>selected <?php endif; ?>>Rental</option>

            </select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Product Description</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Insert the general information about the product"><i class="fa fa-info-circle" style="margin-left:10px;"></i></a>
            <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Insert product description"><?php echo e($update->product_description); ?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Technical Specification</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Insert the detailed technical specification"><i class="fa fa-info-circle" style="margin-left:10px;"></i></a>

            <div class="box-body pad">
                <textarea id="textarea" name="specification" placeholder="Insert the technical specification" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
            </div>
					</div>
          <?php if(isset($gambar)): ?>
          <div class="form-group">

          <label for="media" class="col-md-12">Current image(s):</label>
            <?php $__currentLoopData = $gambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gbr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="col-md-3 col-xs-12 " style="margin:15px;">
                <div class="text-center">
                  <div style="height:100px;"  class="text-center thumbnail">
                    <a target="_blank"href="<?php echo e(url('/')); ?>/images/product/<?php echo e($gbr->filename); ?>"><img class="img-responsive" width="100" height="100" src="<?php echo e(url('/')); ?>/images/producthumb/<?php echo e($gbr->filename); ?>"></a>
                  </div>
                  <?php if(sizeof($gambar) >1): ?>
                  <a href="<?php echo e(url('/')); ?>/products/deleteimp/<?php echo e($gbr->pi_id); ?>"><div class="btn btn-danger">
                    Delete Picture
                  </div></a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

          <?php endif; ?>
          <div class="form-group col-md-12">

             <label for="media">Add new image(s):</label>
                <input type="file" class="form-control" name="media[]" id="media" multiple>
            </div>

          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				</div><!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary" id="simpan">Save</button>
				</div>
			</form>
		</div><!-- /.box -->
	</div>
</div>

<?php echo $__env->make('admin.master.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
  $(document).ready(function () {
    console.log('<?php echo e($update->product_specification); ?>');

    $("#textarea").wysihtml5().html('<?php echo e($update->product_specification); ?>');

  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>