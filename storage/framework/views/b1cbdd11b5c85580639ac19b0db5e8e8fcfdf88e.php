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
				<i class="fa fa-cog"></i><h3 class="box-title">Insert new customer</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?php echo e(url('/')); ?>/page-editor/customer-add" enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">Customer Name</label>
						<input type="text" class="form-control" name="name" placeholder="Insert News Title" required>
					</div>
          <div class="form-group">
                <label for="media">Customer Logo</label>
                <input type="file" class="form-control" name="media" id="media" required>
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