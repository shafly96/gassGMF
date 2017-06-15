@extends('admin.master.master')

@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">Insert News</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="store">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">News Title</label>
						<input type="text" class="form-control" name="nama" placeholder="Insert News Title" required>
					</div>
          <div class="form-group">
                <label for="media">News Image</label>
                <input type="file" class="form-control" name="media" id="media" required>
          </div>
					<div class="form-group">
						<label for="exampleInputPassword1">News Content</label>

            <div class="box-body pad">
                <textarea class="textarea" placeholder="News Content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
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
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>

@stop
