<?php $__env->startSection('content'); ?>

<div id="myModal" class="modal fade" role="dialog"></div>

<?php if(session('success')): ?>
		<div class="alert alert-success">
				<?php echo e(session('success')); ?>

		</div>
<?php endif; ?>

<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<i class="fa fa-info-circle"></i><h3 class="box-title">News List</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>News Title</th>
							<th>Time Posted</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<div style="display:none">
								<?php echo e($counter=0); ?>

						</div>
						<?php if(isset($news)): ?>
							<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div style="display:none">
									<?php echo e($counter+=1); ?>

							</div>
							<tr>
								<td><?php echo e($counter); ?></td>
								<td><?php echo e($new->berita_title); ?></td>
								<td><?php echo e($new->berita_date); ?></td>
								<td>
									<a href="<?php echo e(url('/')); ?>/news/update/<?php echo e($new->berita_id); ?>" class="btn btn-warning" id="edit" data-toggle="modal">Edit</a>
									<a href="<?php echo e(url('/')); ?>/news/delete/<?php echo e($new->berita_id); ?>" class="btn btn-danger" id="delete">Delete</a>
									<a target="_blank"href="<?php echo e(url('/')); ?>/news/detail/<?php echo e($new->berita_id); ?>" class="btn btn-info" id="delete">View post</a>

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