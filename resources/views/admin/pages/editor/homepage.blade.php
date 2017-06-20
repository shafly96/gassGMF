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
				<i class="fa fa-cog"></i><h3 class="box-title">Edit Homepage</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{url('/')}}/page-editor/homepage" enctype="multipart/form-data">
				<div class="box-body">
					<div style="margin-left:35px;">
						<a target="_blank" href="{{url('/')}}/"><div class="btn btn-info">
							View In Page
						</div></a>
					</div>
          <div class="col-md-12">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <h3 class="box-header with-border"><i class="fa fa-image"></i> Homepage cover photo</h3>
                <div class="box-body">
									@if(isset($homepage))
										<img src="{{url('/')}}/images/homepage/{{$homepage->homepage_gambar}}" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="400" height="236">
									@else
									<img src="{{url('/')}}/images/NoImage.jpg" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="400" height="236">
									@endif
								  <br>
                  <div class="text-center">
                    <label class="btn btn-default btn-file">
                      <i class="fa fa-pencil"></i>  Change cover photo <input id="change" type="file" name="cover">
                    </label>
                    <p id="p1">
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group ">
                  <h3 class="box-header with-border"><i class="fa fa-info-circle"></i>Slogan</h3>
                  <div class="box-body">
                    <textarea name="slogan" rows="3" cols="30" class="form-control" placeholder="Insert the slogan" required>@if(isset($homepage)){{$homepage->homepage_slogan}}@endif</textarea>
                  </div>
              </div>
              <div class="form-group ">
                  <h3 class="box-header with-border"><i class="fa fa-info-circle"></i>Slogan Sub-text</h3>
                  <div class="box-body">
                    <textarea name="subtext" rows="3" cols="30" class="form-control" placeholder="Insert the slogan sub text" required>@if(isset($homepage)){{$homepage->homepage_slogan_subtext}}@endif</textarea>
                  </div>
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
		 	var filename = document.getElementById("change").value;
		 	filename = filename.split("\\");
		 	document.getElementById("p1").innerHTML= filename[filename.length-1];
	 	}
	 });
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });

</script>

@stop
