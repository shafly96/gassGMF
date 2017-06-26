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
				<i class="fa fa-info-circle"></i><h3 class="box-title">After Sales List</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Company Name</th>
							<th>Machine Serial No</th>
							<th>Product Type</th>
              <th>Received At</th>
              <th>Action</th>
						</tr>
					</thead>
					<tbody>
						<div style="display:none">
								<?php echo e($counter=0); ?>

						</div>
						<?php if(isset($aftersales)): ?>
							<?php $__currentLoopData = $aftersales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aftersale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div style="display:none">
									<?php echo e($counter+=1); ?>

							</div>
							<tr>
								<td><?php echo e($counter); ?></td>
								<td><?php echo e($aftersale->as_company_name); ?></td>
								<td><?php echo e($aftersale->as_serial); ?></td>
                <td><?php echo e($aftersale->product_name); ?></td>
                <td><?php echo e($aftersale->as_timestamp); ?></td>
								<td>
									<a href="<?php echo e(url('/')); ?>/inbox/showaftersale/<?php echo e($aftersale->as_id); ?>" class="btn btn-info">View Details</a>
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