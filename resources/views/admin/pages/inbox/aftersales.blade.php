@extends('admin.master.master')

@section('content')

<div id="myModal" class="modal fade" role="dialog"></div>

@if (session('success'))
		<div class="alert alert-success">
				{{ session('success') }}
		</div>
@endif

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
								{{$counter=0}}
						</div>
						@if(isset($aftersales))
							@foreach($aftersales as $aftersale)
							<div style="display:none">
									{{$counter+=1}}
							</div>
							<tr>
								<td>{{$counter}}</td>
								<td>{{$aftersale->as_company_name}}</td>
								<td>{{$aftersale->as_serial}}</td>
                <td>
									@if($aftersale->as_product_type==1)
											Assembly and Fabrication
										@elseif($aftersale->as_product_type==2)
											Service
										@elseif($aftersale->as_product_type==3)
											Maintenance
										@else
											Rental
										@endif
										</td>
                <td>{{$aftersale->as_timestamp}}</td>
								<td>
									<a href="{{url('/')}}/inbox/showaftersale/{{$aftersale->as_id}}" class="btn btn-info">View Details</a>
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
