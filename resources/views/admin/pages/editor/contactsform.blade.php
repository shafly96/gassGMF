@extends('admin.master.master')

@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">Edit contact information</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="store">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">Company Address</label>
						<input type="text" class="form-control" name="nama" placeholder="Insert company address" required>
					</div>
          <div class="form-group">
                <label for="media">Company Telephone number #1</label>
                <input type="text" class="form-control" name="media" placeholder="Insert company phone number" required>
          </div>
          <div class="form-group">
                <label for="media">Company Telephone number #2</label>
                <input type="text" class="form-control" placeholder="Insert company phone number"name="media" >
          </div>
          <div class="form-group">
                <label for="media">Company Email #1</label>
                <input type="email" class="form-control" placeholder="Insert company email"name="media" required >
          </div>
          <div class="form-group">
                <label for="media">Company Email #2</label>
                <input type="email" class="form-control" placeholder="Insert company email" name="media">
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
