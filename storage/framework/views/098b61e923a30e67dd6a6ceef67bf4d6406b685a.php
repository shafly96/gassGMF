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
				<i class="fa fa-info-circle"></i><h3 class="box-title">Products List</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<div style="display:none">
					<?php $counter=1; ?>
				</div>
				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Product Name</th>
							<th>Product Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($products)): ?>
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($counter++); ?></td>
							<td><?php echo e($product->product_name); ?></td>
							<td><?php if($product->product_tipe==1): ?>
										Assembly and Fabrication
									<?php elseif($product->product_tipe==2): ?>
										Service
									<?php elseif($product->product_tipe==3): ?>
										Maintenance
									<?php else: ?>
										Rental
									<?php endif; ?>
							</td>
							<td>
								<a href="<?php echo e(url('/')); ?>/products/update/<?php echo e($product->product_id); ?>" class="btn btn-warning" id="edit" data-toggle="modal">Edit</a>
								<a href="<?php echo e(url('/')); ?>/products/delete/<?php echo e($product->product_id); ?>" class="btn btn-danger" id="delete">Delete</a>
								<a target="_blank"href="<?php echo e(url('/')); ?>/products/detail/<?php echo e($product->product_id); ?>" class="btn btn-info" id="view">View in Page</a>

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