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
				<i class="fa fa-cog"></i><h3 class="box-title"><?php if(isset($manager)): ?> Update <?php else: ?> Insert new <?php endif; ?>  manager</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" <?php if(empty($manager)): ?> action="<?php echo e(url('/')); ?>/page-editor/form-manager" <?php else: ?> action="<?php echo e(url('/')); ?>/page-editor/update-manager/<?php echo e($manager->id); ?>" <?php endif; ?> enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">Manager Name</label>
						<input type="text" class="form-control" name="name" placeholder="Insert Manager Name here" <?php if(isset($manager)): ?> value="<?php echo e($manager->manager_nama); ?>"<?php endif; ?> required>
					</div>
          <div class="form-group">
						<label for="exampleInputPassword1">Manager Position</label>
						<input type="text" class="form-control" name="position" placeholder="Insert Manager Position here" <?php if(isset($manager)): ?> value="<?php echo e($manager->manager_jabatan); ?>"<?php endif; ?> required>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Manager Bio</label>
						<input type="text" class="form-control" name="bio" placeholder="Insert Manager Short Biography here" <?php if(isset($manager)): ?> value="<?php echo e($manager->manager_bio); ?>"<?php endif; ?> required>
					</div>

          <div class="form-group">
                <label for="media"> <?php if(isset($manager)): ?> Change <?php endif; ?> Manager Picture</label> <small style="color:grey">leave this form empty if there are no changes</small>
                <input type="file" class="form-control" name="media" id="media" <?php if(empty($manager)): ?> required <?php endif; ?>  >
								<p id="p1"></p>
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
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
		$('#media').bind('change', function(e) {
		 var data = e.originalEvent.target.files[0];
		 // and then ...
		 console.log(data.size + "is my file's size");
		 // or something more useful ...
		 if(data.size > 2000000) {
			 document.getElementById("p1").innerHTML= "<p style='color:red'>Please upload a file under 2MB</p>";
			 $('#media').val('');
		 }
		});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>