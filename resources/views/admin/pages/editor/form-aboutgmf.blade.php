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
				<i class="fa fa-cog"></i><h3 class="box-title">Edit Page : About GMF</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{url('/')}}/page-editor/addaboutgmf" enctype="multipart/form-data">
				<div class="box-body">
          <div style="margin-bottom:10px;">
						<a href="#"><div class="btn btn-info">
							View In Page
						</div></a>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">About GMF</label>
            <textarea name="aboutgmf" class="textarea form-control" rows="8" cols="80" required></textarea>
					</div>
          <div class="form-group">
                @if(isset($about->about_gmf_gambar))
                    <img src="{{url('/')}}/images/about/gmf/{{$about->about_gmf_gambar}}" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="400" height="236">
                @else
                  <img src="{{url('/')}}/images/NoImage.jpg" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="400" height="236">
                @endif
              <br> <label for="media">Change Header Image</label> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no changes">  <i class="fa fa-info-circle"></i></a>
                <input type="file" class="form-control" name="media" id="media"                @if(empty($about->about_gmf_gambar))required @endif>
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
    @if(isset($about->about_gmf_text))
    <script type="text/javascript">
      $(document).ready(function () {
        $(".textarea").wysihtml5().html('{{$about->about_gmf_text}}');
      });
      </script>
    @else
      <script>
        $(document).ready(function () {

          $(".textarea").wysihtml5();
        });
      </script>
    @endif

<script>
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
