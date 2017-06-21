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
				<i class="fa fa-cog"></i><h3 class="box-title">Register New Admin</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?php echo e(url('/')); ?>/user/register" enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">User ID</label>
						<input type="text" class="form-control" name="id" placeholder="Insert User ID" required>
					</div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Insert Password" required>
          </div>
          <div class="form-group">
						<label for="exampleInputPassword1">Verify Password</label>
						<input type="password" class="form-control" name="verifypass" placeholder="Verify Password" required>
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