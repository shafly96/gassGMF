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
				<i class="fa fa-info-circle"></i><h3 class="box-title">Manager List</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
        <a href="{{url('/')}}/page-editor/form-manager">
          <div style="margin:5px 0px 20px 0px" class="btn btn-primary">
          Insert new manager data
        </div>
      </a>

				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Manager Name</th>
							<th>Position</th>
							<th>Action</th>
						</tr>
					</thead>
					<div style="display:none">
							{{$counter=0}}
					</div>
					<tbody>

						@if(isset($manager[0]))
  						@foreach($manager as $manage)
  						<div style="display:none">
  								{{$counter+=1}}
  						</div>
  						<tr>
  							<td>{{$counter}}</td>
  							<td>{{$manage->manager_nama}}</td>
                <td>{{$manage->manager_jabatan}}</td>
  							<!-- <td><div class="btn btn-default btn-sm" role="button">View Picture</div></td> -->
  							<td>
                  <a href="{{url('/')}}/page-editor/update-manager/{{$manage->id}}" class="btn btn-success" id="delete">Edit</a>
  								<a href="{{url('/')}}/page-editor/delete-manager/{{$manage->id}}" class="btn btn-danger" id="delete">Delete</a>
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
