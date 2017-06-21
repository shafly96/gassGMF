<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
		<div class="alert alert-success">
				<?php echo e(session('success')); ?>

		</div>
<?php endif; ?>
<?php if(session('failed')): ?>
		<div class="alert alert-danger">
				<?php echo e(session('failed')); ?>

		</div>
<?php endif; ?>
<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">Change Password</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?php echo e(url('/')); ?>/user/changepass" enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">Old Password</label>
						<input type="password" class="form-control" name="oldpass" placeholder="Insert your old password" required>
					</div>
          <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="password" class="form-control" name="newpass" placeholder="Insert new password" required>
          </div>
          <div class="form-group">
						<label for="exampleInputPassword1">Verify New Password</label>
						<input type="password" class="form-control" name="verifypass" placeholder="Verify new password" required>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>