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
				<i class="fa fa-info-circle"></i><h3 class="box-title">Customer List</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Customer Name</th>
							<th>Customer logo</th>
							<th>Action</th>
						</tr>
					</thead>
					<div style="display:none">
							<?php echo e($counter=0); ?>

					</div>
					<tbody>

						<?php if(isset($customers)): ?>
						<?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div style="display:none">
								<?php echo e($counter+=1); ?>

						</div>
						<tr>
							<td><?php echo e($counter); ?></td>
							<td><?php echo e($customer->customer_name); ?></td>
							<!-- <td><div class="btn btn-default btn-sm" role="button">View Picture</div></td> -->
              <td><img src="<?php echo e(url('/')); ?>/images/logo-cust/<?php echo e($customer->customer_filename); ?>" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="100" height="100"></td>
							<td>
								<a href="<?php echo e(url('/')); ?>/page-editor/del-cust/<?php echo e($customer->customer_id); ?>" class="btn btn-danger" id="delete">Delete</a>
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