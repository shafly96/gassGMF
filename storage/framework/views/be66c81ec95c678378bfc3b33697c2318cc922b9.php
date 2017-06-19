<?php $__env->startSection('content'); ?>

<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">
					<?php if(isset($update)): ?>
					Update
					<?php else: ?>
					Insert
					<?php endif; ?> News</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action=<?php if(isset($update)): ?>"<?php echo e(url('/')); ?>/news/update/<?php echo e($update->berita_id); ?>"<?php else: ?>"<?php echo e(url('/')); ?>/news/form" <?php endif; ?> enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">News Title</label>
						<input type="text" class="form-control" name="title" placeholder="Insert News Title" <?php if(isset($update)): ?>value=<?php echo e($update->berita_title); ?><?php endif; ?> required>
					</div>
          <div class="form-group">
                <label for="media"><?php if(isset($update)): ?>Update <?php endif; ?> News Image</label> <?php if(isset($update)): ?><a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no changes">  <i class="fa fa-info-circle"></i></a><?php endif; ?>
                <input type="file" class="form-control" name="media" id="media" <?php if(empty($update)): ?> required <?php endif; ?>>
          </div>
					<div class="form-group">
						<label for="exampleInputPassword1">News Content</label>

            <div class="box-body pad">
                <textarea id="textarea" name="content" placeholder="News Content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
            </div>
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
	<?php if(isset($update)): ?>
	<script>
		$(document).ready(function () {
			console.log('<?php echo e($update->berita_text); ?>');

			$("#textarea").wysihtml5().html('<?php echo e($update->berita_text); ?>');

		});
  </script>
	<?php else: ?>
	<script>
		$(document).ready(function () {

			$("#textarea").wysihtml5();
		});
  </script>
	<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>