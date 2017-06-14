@extends('admin.master.master')

@section('content')

<div id="myModal" class="modal fade" role="dialog"></div>

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
							<th>ID</th>
							<th>Customer Name</th>
							<th>Customer logo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Garuda Indonesia</td>
							<!-- <td><div class="btn btn-default btn-sm" role="button">View Picture</div></td> -->
              <td><img src="{{url('/')}}/dist/img/garudalogo.png" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="100" height="100"></td>
							<td>
								<a class="btn btn-warning" id="edit" data-toggle="modal">Edit</a>
								<a class="btn btn-danger" id="delete">Delete</a>
							</td>
						</tr>
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
