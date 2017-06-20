@extends('admin.master.master')

@section('content')

@if (session('success'))
		<div class="alert alert-success">
				{{ session('success') }}
		</div>
@endif
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
						@if(isset($products))
						@foreach($products as $product)
						<tr>
							<td>{{$counter++}}</td>
							<td>{{$product->product_name}}</td>
							<td>@if($product->product_tipe==1)
										Assembly and Fabrication
									@elseif($product->product_tipe==2)
										Service
									@elseif($product->product_tipe==3)
										Maintenance
									@else
										Rental
									@endif
							</td>
							<td>
								<a href="{{url('/')}}/products/update/{{$product->product_id}}" class="btn btn-warning" id="edit" data-toggle="modal">Edit</a>
								<a href="{{url('/')}}/products/delete/{{$product->product_id}}" class="btn btn-danger" id="delete">Delete</a>
								<a target="_blank"href="{{url('/')}}/products/detail/{{$product->product_id}}" class="btn btn-info" id="view">View in Page</a>

							</td>
						</tr>
						@endforeach
						@endif
          </tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div>

@include('admin.master.script')

<script type="text/javascript">
	$('#example1').DataTable();

</script>

@stop
