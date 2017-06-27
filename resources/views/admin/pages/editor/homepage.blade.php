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
				<i class="fa fa-info-circle"></i><h3 class="box-title">Homepage Slides List</h3>

			</div><!-- /.box-header -->
			<div class="box-body">
				<a href="{{url('/')}}/page-editor/addhomepage"><div style="margin:10px 0px;"class="btn btn-primary">
					<i class="fa fa-pencil"></i>  Insert new homepage slide
				</div></a>
				<a target="_blank" href="{{url('/')}}/"><div style="margin:10px 0px;"class="btn btn-info">
					  View in page
				</div></a>
				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Slogan</th>
							<th>Slogan Subtext</th>
							<th>Slogan Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<div style="display:none">
							{{$counter=0}}
					</div>
					<tbody>

						@if(isset($slides[0]))
							@foreach($slides as $slide)
							<div style="display:none">
									{{$counter+=1}}
							</div>
							<tr>
								<td>{{$counter}}</td>
								<td>{{$slide->homepage_slogan}}</td>
								<td>{{$slide->homepage_slogan_subtext}}</td>
	              <td><img src="{{url('/')}}/images/homepage/homepagethumb/{{$slide->homepage_gambar}}" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="100" height="100"></td>
								<td>
									<a href="{{url('/')}}/page-editor/homepage/{{$slide->homepage_id}}" class="btn btn-primary" id="delete">Update</a>
									<a href="{{url('/')}}/page-editor/del-homepage/{{$slide->homepage_id}}" class="btn btn-danger" id="delete">Delete</a>
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
