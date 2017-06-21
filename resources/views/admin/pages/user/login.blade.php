<!DOCTYPE html>
<html>
<head>
	@include('admin.master.head')
	<style type="text/css">
		.btn:hover{
			transform: scale(1.2);
			transition: all .2s ease-in-out;
			background-color: white;
			border-color: #02C1EF;
			color: #02C1EF;
		}
	</style>
</head>
<body>
	@if (session('failed'))
			<div class="alert alert-error">
					{{ session('failed') }}
			</div>
	@endif
	@if (session('success'))
			<div class="alert alert-success">
					{{ session('success') }}
			</div>
	@endif
	<div class="col-md-12 col-xs-12 text-center" style="height:100vh;text-align: center;background:url({{url('/')}}/image/logingbr.jpg);background-size:cover;">
    <div style="background:white;margin:auto;margin-top:100px; border-radius:10px; width:50%; height:60%;">
      <p class="auto" style="margin-top:20px; font-size: 50px;">GASS Admin</p>
      <div class="col-md-12">
        <div style="width: 30%; margin:auto; position:relative">
          <form role="form" class="proximaLight" action="{{url('/')}}/logs" method="POST" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-body">

              <div class="form-group">
                <label class="pull-left">User ID</label>
                <input class="form-control" name="userid" required>
              </div>
              <div class="form-group">
                <label class="pull-left">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-info btn-md" type="submit" name="button" style="margin:0px 10px;">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>
	</div>
</body>

@include('admin.master.script')

</html>
