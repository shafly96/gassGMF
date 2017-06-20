@extends('admin.master.master')

@section('content')

@include('admin.master.script')
<div class="row">
	<!-- left column -->
	<div class="col-xs-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<i class="fa fa-cog"></i><h3 class="box-title">After Sale Details</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form >
				<div class="box-body">
          @isset($aftersales)
					<div class="form-group">
						<label for="exampleInputPassword1">Company Name</label>
            <p>{{$aftersales->as_company_name}}</p>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contact Name</label>
            <p>{{$aftersales->as_contact_name}}</p>

					</div>
          <div class="form-group">
            <label for="exampleInputPassword1">E-mail</label>
            <p>{{$aftersales->as_email}}</p>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Machine Serial Number</label>
            <p>{{$aftersales->as_contact_name}}</p>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Product Type</label>
            <p>@if($aftersales->as_product_type==1)
                Assembly and Fabrication
              @elseif($aftersales->as_product_type==2)
                Service
              @elseif($aftersales->as_product_type==3)
                Maintenance
              @else
                Rental
              @endif</p>

          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            @if($aftersales->as_out == 1)
            <p>Machine out of service</p>
            @else
            <p>Machine active</p>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <p>{{$aftersales->as_description}}</p>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Receipt At</label>
            <p>{{$aftersales->as_timestamp}}</p>
          </div>
          @isset($gambar[0])
          <div class="form-group">
            <label for="exampleInputPassword1">Pictures</label>
            <div class="col-md-12">
              @foreach($gambar as $gbr)

              <div class="col-md-4 col-xs-12">
                <div class="thumbnail">
                    <img class="img-responsive" src="{{url('/')}}/images/aftersales/{{$gbr->filename}}">
                </div>
              </div>
              @endforeach

            </div>

          </div>
          @endisset

          @endisset
				</div><!-- /.box-body -->
			</form>
		</div><!-- /.box -->
	</div>
</div>
@stop
