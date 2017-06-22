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
            <p>{{$aftersales->as_serial}}</p>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Product Type</label>
            <p>@if($aftersales->product_tipe==1)
                Assembly and Fabrication
              @elseif($aftersales->product_tipe==2)
                Service
              @elseif($aftersales->product_tipe==3)
                Maintenance
              @else
                Rental
              @endif
							-- {{$aftersales->product_name}}
						</p>

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
                <div class="thumbnail" style="height:150px;">
                    <a target="_blank"href="{{url('/')}}/images/aftersales/{{$gbr->filename}}"><img class="img-thumbnail" style="border:none;max-width:100%;max-height:100%;" src="{{url('/')}}/images/aftersales/{{$gbr->filename}}"></a>
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
