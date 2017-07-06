@extends('admin.master.master')

@section('content')

@if (session('success'))
		<div class="alert alert-success">
				{{ session('success') }}
		</div>
@endif
<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">@if(isset($manager)) Update @else Insert new @endif  manager</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" @if(empty($manager)) action="{{url('/')}}/page-editor/form-manager" @else action="{{url('/')}}/page-editor/update-manager/{{$manager->id}}" @endif enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">Manager Name</label>
						<input type="text" class="form-control" name="name" placeholder="Insert Manager Name here" @if(isset($manager)) value="{{$manager->manager_nama}}"@endif required>
					</div>
          <div class="form-group">
						<label for="exampleInputPassword1">Manager Poisition</label>
						<input type="text" class="form-control" name="position" placeholder="Insert Manager Position here" @if(isset($manager)) value="{{$manager->manager_jabatan}}"@endif required>
					</div>

					<div class="form-group">
						<label for="exampleInputPassword1">Manager Bio</label>
						<input type="text" class="form-control" name="bio" placeholder="Insert Manager Short Biography here" @if(isset($manager)) value="{{$manager->manager_bio}}"@endif required>
					</div>

          <div class="form-group">
                <label for="media">Manager Picture</label> <small style="color:grey">leave this form empty if there are no changes</small>
                <input type="file" class="form-control" name="media" id="media" @if(empty($manager)) required @endif  >
								<p id="p1"></p>
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
		$('#media').bind('change', function(e) {
		 var data = e.originalEvent.target.files[0];
		 // and then ...
		 console.log(data.size + "is my file's size");
		 // or something more useful ...
		 if(data.size > 2000000) {
			 document.getElementById("p1").innerHTML= "<p style='color:red'>Please upload a file under 2MB</p>";
			 $('#media').val('');
		 }
		});
</script>

@stop
