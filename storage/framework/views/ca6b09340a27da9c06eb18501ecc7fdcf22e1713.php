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
				<i class="fa fa-cog"></i><h3 class="box-title">Edit Page : Our Facility</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?php echo e(url('/')); ?>/page-editor/addourfacility" enctype="multipart/form-data">
				<div class="box-body">
          <div style="margin-bottom:10px;">
						<a href="#"><div class="btn btn-info">
							View In Page
						</div></a>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">About Our Facility</label>
            <textarea name="ourfaci" class="textarea form-control" rows="8" cols="80" required></textarea>
					</div>
          <div class="form-group">
                <?php if(isset($about->about_facility_gambar)): ?>
                    <img src="<?php echo e(url('/')); ?>/images/about/facility/<?php echo e($about->about_facility_gambar); ?>" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="400" height="236">
                <?php else: ?>
                  <img src="<?php echo e(url('/')); ?>/images/NoImage.jpg" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="400" height="236">
                <?php endif; ?>
              <br> <label for="media">Change Header Image</label> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no changes">  <i class="fa fa-info-circle"></i></a>
                <input type="file" class="form-control" name="media" id="media"                <?php if(empty($about->about_facility_gambar)): ?>required <?php endif; ?>>
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
    <?php if(isset($about->about_facility_text)): ?>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".textarea").wysihtml5().html('<?php echo e($about->about_facility_text); ?>');
      });
      </script>
    <?php else: ?>
      <script>
        $(document).ready(function () {

          $(".textarea").wysihtml5();
        });
      </script>
    <?php endif; ?>

<script>
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