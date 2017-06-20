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
								{{$counter=0}}
						</div>
						@if(isset($news))
							@foreach($news as $new)
							<div style="display:none">
									{{$counter+=1}}
							</div>
							<tr>
								<td>{{$counter}}</td>
								<td>{{$new->berita_title}}</td>
								<td>{{$new->berita_date}}</td>
								<td>
									<a href="{{url('/')}}/news/update/{{$new->berita_id}}" class="btn btn-warning" id="edit" data-toggle="modal">Edit</a>
									<a href="{{url('/')}}/news/delete/{{$new->berita_id}}" class="btn btn-danger" id="delete">Delete</a>
									<a target="_blank"href="{{url('/')}}/news/detail/{{$new->berita_id}}" class="btn btn-info" id="delete">View post</a>

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
