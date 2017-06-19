@extends('admin.master.master')

@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">
					@if(isset($update))
					Update
					@else
					Insert
					@endif News</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action=@if(isset($update))"{{url('/')}}/news/update/{{$update->berita_id}}"@else"{{url('/')}}/news/form" @endif enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">News Title</label>
						<input type="text" class="form-control" name="title" placeholder="Insert News Title" @if(isset($update))value={{$update->berita_title}}@endif required>
					</div>
          <div class="form-group">
                <label for="media">@if(isset($update))Update @endif News Image</label> @if(isset($update))<a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no changes">  <i class="fa fa-info-circle"></i></a>@endif
                <input type="file" class="form-control" name="media" id="media" @if(empty($update)) required @endif>
          </div>
					<div class="form-group">
						<label for="exampleInputPassword1">News Content</label>

            <div class="box-body pad">
                <textarea id="textarea" name="content" placeholder="News Content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
            </div>
					</div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div><!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary" id="simpan">Save</button>
				</div>
			</form>
		</div><!-- /.box -->
	</div>
</div>

@include('admin.master.script')
	@if(isset($update))
	<script>
		$(document).ready(function () {
			console.log('{{$update->berita_text}}');

			$("#textarea").wysihtml5().html('{{$update->berita_text}}');

		});
  </script>
	@else
	<script>
		$(document).ready(function () {

			$("#textarea").wysihtml5();
		});
  </script>
	@endif


@stop
