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
				<i class="fa fa-cog"></i><h3 class="box-title">Edit Page : Testimony</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{url('/')}}/page-editor/addtestimony" enctype="multipart/form-data">
				<div class="box-body">

          <div class="col-md-12">
            <div style="margin-bottom:10px;">
              <a href="#"><div class="btn btn-info">
                View In Page
              </div></a>
            </div>
              <div class="col-md-4 col-xs-12">

                <div class="form-group">

                  <label for="exampleInputPassword1">#1 Testimony</label>
                  <div class="form-group">
                        @if(isset($about->about_testimony_g1))
												<div class="text-center thumbnail" style="height:175px;">
													<img src="{{url('/')}}/images/about/testi/{{$about->about_testimony_g1}}" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="175" height="175">

												</div>
                        @else
												<div  class="text-center thumbnail"style="height:175px;">

                          <img src="{{url('/')}}/images/NoImage.jpg" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="175" height="175">
												</div>
											  @endif
                      <br> <label for="media">Change Picture</label> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no changes">  <i class="fa fa-info-circle"></i></a>
                        <input type="file" class="form-control" name="media1" id="media1"                @if(empty($about->about_testimony_g1))required @endif>
                        <p id="p1"></p>
                  </div>
                  <label for="media">Name</label>
                   <input type="text" class="form-control"name="nama1"  @if(isset($about->about_testimony_n1))value="{{$about->about_testimony_n1}}" @endif required>
                   <label for="media">Position</label>
                  <input type="text" class="form-control"name="jabatan1"  @if(isset($about->about_testimony_title1))value="{{$about->about_testimony_title1}}" @endif required>
                  <label for="media">Testimony</label>

                  <textarea name="test1" class="form-control" rows="8" cols="80" required>{{$about->about_testimony_t1}}</textarea>
                </div>
              </div>
              <div class="col-md-4 col-xs-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">#2 Testimony</label>
                  <div class="form-group">
                        @if(isset($about->about_testimony_g2))
												<div   class="text-center thumbnail"style="height:175px;">

                            <img src="{{url('/')}}/images/about/testi/{{$about->about_testimony_g2}}" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="175" height="175">
													</div>
											  @else
												<div  class="text-center thumbnail"style="height:175px;">

                          <img src="{{url('/')}}/images/NoImage.jpg" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="175" height="175">
												</div>
											  @endif
                      <br> <label for="media">Change Picture</label> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no changes">  <i class="fa fa-info-circle"></i></a>
                        <input type="file" class="form-control" name="media2" id="media2"                @if(empty($about->about_testimony_g2))required @endif >
                        <p id="p2"></p>
                  </div>
                  <label for="media">Name</label>
                   <input type="text" class="form-control"name="nama2"  @if(isset($about->about_testimony_n2))value="{{$about->about_testimony_n2}}" @endif required>
                   <label for="media">Position</label>
                  <input type="text" class="form-control"name="jabatan2"  @if(isset($about->about_testimony_title2))value="{{$about->about_testimony_title2}}" @endif required>
                  <label for="media">Testimony</label>

                  <textarea name="test2" class="form-control" rows="8" cols="80" required>{{$about->about_testimony_t2}}</textarea>
                </div>
              </div>
              <div class="col-md-4 col-xs-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">#3 Testimony</label>
                  <div class="form-group">
                        @if(isset($about->about_testimony_g3))
												<div  class="text-center thumbnail"style="height:175px; ">

                            <img src="{{url('/')}}/images/about/testi/{{$about->about_testimony_g3}}" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="175" height="175">
													</div>
											  @else
												<div  class="text-center thumbnail"style="height:175px;">

                          <img src="{{url('/')}}/images/NoImage.jpg" class="img-thumbnail" alt="Cinque Terre" style="border:none;" width="175" height="175">
												</div>
											  @endif
                      <br> <label for="media">Change Picture</label> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Leave this form empty if there are no changes">  <i class="fa fa-info-circle"></i></a>
                        <input type="file" class="form-control" name="media3" id="media3"                @if(empty($about->about_testimony_g3))required @endif>
                        <p id="p3"></p>
                  </div>
                  <label for="media">Name</label>
                   <input type="text" class="form-control"name="nama3"  @if(isset($about->about_testimony_n3))value="{{$about->about_testimony_n3}}" @endif required>
                   <label for="media">Position</label>
                  <input type="text" class="form-control"name="jabatan3"  @if(isset($about->about_testimony_title3))value="{{$about->about_testimony_title3}}" @endif required>
                  <label for="media">Testimony</label>

                  <textarea name="test3" class="form-control" rows="8" cols="80" required>{{$about->about_testimony_t3}}</textarea>
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
		$('#media1').bind('change', function(e) {
		 var data = e.originalEvent.target.files[0];
		 // and then ...
		 console.log(data.size + "is my file's size");
		 // or something more useful ...
		 if(data.size > 2000000) {
			 document.getElementById("p1").innerHTML= "<p style='color:red'>Please upload a file under 2MB</p>";
			 $('#media1').val('');
		 }
		});
    $('#media2').bind('change', function(e) {
     var data = e.originalEvent.target.files[0];
     // and then ...
     console.log(data.size + "is my file's size");
     // or something more useful ...
     if(data.size > 2000000) {
       document.getElementById("p2").innerHTML= "<p style='color:red'>Please upload a file under 2MB</p>";
       $('#media2').val('');
     }
    });
    $('#media3').bind('change', function(e) {
     var data = e.originalEvent.target.files[0];
     // and then ...
     console.log(data.size + "is my file's size");
     // or something more useful ...
     if(data.size > 2000000) {
       document.getElementById("p3").innerHTML= "<p style='color:red'>Please upload a file under 2MB</p>";
       $('#media3').val('');
     }
    });
</script>

@stop
