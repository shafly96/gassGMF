@extends('admin.master.master')

@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">Insert New Product</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{url('/')}}/products/form" enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label for="exampleInputPassword1">Product Name</label>
						<input type="text" class="form-control" name="nama" placeholder="Insert product name" required>
					</div>
          <div class="form-group">
						<label for="exampleInputPassword1">Product Type</label>
            <select class="form-control" name="tipe">
                <option value="1">Assembly and Fabrication</option>
                <option value="2">Service</option>
                <option value="3">Maintenance</option>
                <option value="4">Rental</option>

            </select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Product Description</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Insert the general information about the product"><i class="fa fa-info-circle" style="margin-left:10px;"></i></a>
            <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Insert product description"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Technical Specification</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Insert the detailed technical specification"><i class="fa fa-info-circle" style="margin-left:10px;"></i></a>

            <div class="box-body pad">
                <textarea class="textarea" name="specification" placeholder="Insert the technical specification" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
            </div>
					</div>
          <div class="form-group">
                <label for="media">Upload product image(s):</label>
                <input type="file" class="form-control" name="media[]" id="media" multiple required>
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
