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
							{{$counter=0}}
					</div>
					<tbody>

						@if(isset($customers))
						@foreach($customers as $customer)
						<div style="display:none">
								{{$counter+=1}}
						</div>
						<tr>
							<td>{{$counter}}</td>
							<td>{{$customer->customer_name}}</td>
							<!-- <td><div class="btn btn-default btn-sm" role="button">View Picture</div></td> -->
              <td><img src="{{url('/')}}/images/logo-cust/{{$customer->customer_filename}}" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="100" height="100"></td>
							<td>
								<a href="{{url('/')}}/page-editor/del-cust/{{$customer->customer_id}}" class="btn btn-danger" id="delete">Delete</a>
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
