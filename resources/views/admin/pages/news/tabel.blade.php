@extends('admin.master.master')

@section('content')

<div id="myModal" class="modal fade" role="dialog"></div>

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
							<th>ID</th>
							<th>News Title</th>
							<th>Time Posted</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Example Title</td>
							<td>14-5-2017 10:00:00</td>
							<td>
								<a class="btn btn-warning" id="edit" data-toggle="modal">Edit</a>
								<a class="btn btn-danger" id="delete">Delete</a>
							</td>
						</tr>
            <tr>
							<td>2</td>
							<td>Example Title</td>
							<td>15-5-2017 12:00:00</td>
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
