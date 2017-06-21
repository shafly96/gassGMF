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
				<i class="fa fa-cog"></i><h3 class="box-title">Edit contact information</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?php echo e(url('/')); ?>/page-editor/contacts" enctype="multipart/form-data">
				<div class="box-body">
					<div style="margin-bottom:10px;">
						<a target="_blank"href="<?php echo e(url('/')); ?>/contact"><div class="btn btn-info">
							View In Page
						</div></a>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Company Address</label>
						<textarea name="address" rows="3" cols="80" class="form-control" id="address" placeholder="Insert company address" required></textarea>
					</div>
          <div class="form-group">
                <label for="media">Company Telephone number #1</label>
                <input type="text" class="form-control" name="telp1" placeholder="Insert company phone number" <?php if(isset($contacts)): ?>value='<?php echo e($contacts->fc_telp1); ?>'<?php endif; ?> required>
          </div>
          <div class="form-group">
                <label for="media">Company Telephone number #2</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no alternative phone number">  <i class="fa fa-info-circle"></i></a>
                <input type="text" class="form-control" placeholder="Insert company phone number"name="telp2" <?php if(isset($contacts)): ?>value='<?php echo e($contacts->fc_telp2); ?>'<?php endif; ?> >
          </div>
          <div class="form-group">
                <label for="media">Company Email #1</label>
                <input type="email" class="form-control" placeholder="Insert company email"name="email1" <?php if(isset($contacts)): ?>value=<?php echo e($contacts->fc_email); ?><?php endif; ?> required >
          </div>
          <div class="form-group">
                <label for="media">Company Email #2</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no alternative email address">  <i class="fa fa-info-circle"></i></a>
                <input type="email" class="form-control" placeholder="Insert company email" name="email2" <?php if(isset($contacts)): ?>value=<?php echo e($contacts->fc_email2); ?><?php endif; ?>>
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

	<?php if(isset($contacts)): ?>
	<script>
		$(document).ready(function () {
			$("#address").wysihtml5({'toolbar': false}).html('<?php echo e($contacts->fc_address); ?>');
		});
	</script>
	<?php else: ?>
	<script>
		$(document).ready(function () {
			$("#address").wysihtml5({'toolbar': false});
		});
	</script>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>