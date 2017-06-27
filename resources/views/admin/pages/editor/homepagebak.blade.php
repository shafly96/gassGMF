@extends('admin.master.master')

@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		@if (session('success'))
				<div class="alert alert-success">
						{{ session('success') }}
				</div>
		@endif

		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">Edit Homepage Slide</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" @if(isset($homepage)) action="{{url('/')}}/page-editor/edithomepage/{{$homepage->homepage_id}}" @endif @if(empty($homepage))action="{{url('/')}}/page-editor/homepage" @endif enctype="multipart/form-data">
				<div class="box-body">
            <div class="col-md-12 col-xs-12">
							<div class="form-group ">
									<h3 class="box-header with-border"><i class="fa fa-photo"></i>Slide Picture   <small style="color:grey">Leave this form empty if there are no changes</small></h3>
									<div class="box-body">
										<input type="file" name="media"  @if(isset($homepage)) @else required @endif>
									</div>
							</div>
              <div class="form-group ">
                  <h3 class="box-header with-border"><i class="fa fa-info-circle"></i>Slogan</h3>
                  <div class="box-body">
                    <textarea name="slogan" rows="3" cols="30" class="form-control" placeholder="Insert the slogan" required>@if(isset($homepage)){{$homepage->homepage_slogan}}@endif</textarea>
                  </div>
              </div>
              <div class="form-group ">
                  <h3 class="box-header with-border"><i class="fa fa-ellipsis-h"></i>Slogan Sub-text</h3>
                  <div class="box-body">
                    <textarea name="subtext" rows="3" cols="30" class="form-control" placeholder="Insert the slogan sub text" required>@if(isset($homepage)){{$homepage->homepage_slogan_subtext}}@endif</textarea>
                  </div>
              </div>

            </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div><!-- /.box-body -->

				<div class="box-footer text-center">
					<button type="submit" class="btn btn-primary" id="simpan">Save</button>
				</div>
			</form>
		</div><!-- /.box -->
	</div>
</div>

@include('admin.master.script')
<script>

		$('#change').bind('change', function(e) {
		 var data = e.originalEvent.target.files[0];
		 // and then ...
		 console.log(data.size + "is my file's size");
		 // or something more useful ...
		 if(data.size > 2000000) {
			 document.getElementById("p1").innerHTML= "<p style='color:red'>Please upload a file under 2MB</p>";
			 $('#change').val('');
		 }
		 else{
		 	var jumlah = e.originalEvent.target.files.length;
		 	document.getElementById("p1").innerHTML= jumlah + " picture(s) selected";
	 	}
	 });
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });

</script>

@stop
