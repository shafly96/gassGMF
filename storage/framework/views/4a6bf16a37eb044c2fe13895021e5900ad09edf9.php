<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('admin.master.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<style type="text/css">
		.btn:hover{
			transform: scale(1.2);
			transition: all .2s ease-in-out;
			background-color: white;
			border-color: #02C1EF;
			color: #02C1EF;
		}
	</style>
</head>
<body>
	<?php if(session('failed')): ?>
			<div class="alert alert-error">
					<?php echo e(session('failed')); ?>

			</div>
	<?php endif; ?>
	<?php if(session('success')): ?>
			<div class="alert alert-success">
					<?php echo e(session('success')); ?>

			</div>
	<?php endif; ?>
	<div class="col-md-12 col-xs-12 text-center" style="height:100vh;text-align: center;background:url(<?php echo e(url('/')); ?>/image/logingbr.jpg);background-size:cover;">
    <div style="background:white;margin:auto;margin-top:100px; border-radius:10px; width:50%;position:absolute;left:25%;">
      <p class="auto" style="margin-top:20px; font-size: 50px;">GASS Admin</p>
      <div class="col-md-12">
        <div style=" margin:auto;">
          <form role="form" class="proximaLight" action="<?php echo e(url('/')); ?>/user/login" method="POST" >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="modal-body">

              <div class="form-group">
                <label class="pull-left">User ID</label>
                <input class="form-control" name="userid" required>
              </div>
              <div class="form-group">
                <label class="pull-left">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-info btn-md" type="submit" name="button" style="margin:0px 10px;">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</body>

<?php echo $__env->make('admin.master.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</html>
