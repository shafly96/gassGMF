@foreach($product as $data)
	<div class="col-md-4 col-xs-12">
		<div class=" outter-box">
			<a href="{{url('')}}/products/detail/{{$data->product_id}}">
				<div style="height: 150px; background: url('{{url('')}}/images/product/{{$data->filename}}'); background-size: cover;"></div>
			</a>
			<p class="font-box">{{$data->product_name}}</p>
		</div>
	</div>
@endforeach

@if(empty($product[0]))
	<div class="text-center" style="margin-top:50px;">
			<i class="fa fa-2x fa-info-circle" style="color:grey"></i><p style="color:grey;">No data available at this moment</p>
	</div>
@endif
