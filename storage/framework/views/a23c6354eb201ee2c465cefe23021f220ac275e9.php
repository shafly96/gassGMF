<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
		<div class="alert alert-success">
				<?php echo e(session('success')); ?>

		</div>
<?php endif; ?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<i class="fa fa-info-circle"></i><h3 class="box-title">Homepage Slides List</h3>

			</div><!-- /.box-header -->
			<div class="box-body">
				<a href="<?php echo e(url('/')); ?>/page-editor/addhomepage"><div style="margin:10px 0px;"class="btn btn-primary">
					<i class="fa fa-pencil"></i>  Insert new homepage slide
				</div></a>
				<a target="_blank" href="<?php echo e(url('/')); ?>/"><div style="margin:10px 0px;"class="btn btn-info">
					  View in page
				</div></a>
				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Slogan</th>
							<th>Slogan Subtext</th>
							<th>Slogan Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<div style="display:none">
							<?php echo e($counter=0); ?>

					</div>
					<tbody>

						<?php if(isset($slides[0])): ?>
							<?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div style="display:none">
									<?php echo e($counter+=1); ?>

							</div>
							<tr>
								<td><?php echo e($counter); ?></td>
								<td><?php echo e($slide->homepage_slogan); ?></td>
								<td><?php echo e($slide->homepage_slogan_subtext); ?></td>
	              <td><img src="<?php echo e(url('/')); ?>/images/homepage/homepagethumb/<?php echo e($slide->homepage_gambar); ?>" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="100" height="100"></td>
								<td>
									<a href="<?php echo e(url('/')); ?>/page-editor/homepage/<?php echo e($slide->homepage_id); ?>" class="btn btn-primary" id="delete">Update</a>
									<a href="<?php echo e(url('/')); ?>/page-editor/del-homepage/<?php echo e($slide->homepage_id); ?>" class="btn btn-danger" id="delete">Delete</a>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
          </tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div>

<?php echo $__env->make('admin.master.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
	$('#example1').DataTable();

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>