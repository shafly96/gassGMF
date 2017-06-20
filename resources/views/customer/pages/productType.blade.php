@foreach($product as $data)
	<div class="col-md-4">
		<div class=" outter-box">
			<a href="{{url('')}}/products/detail/{{$data->product_id}}">
				<div style="height: 150px; background: url('{{url('')}}/images/product/{{$data->filename}}'); background-size: cover;"></div>
			</a>
			<p class="font-box">{{$data->product_name}}</p>
		</div>
	</div>
@endforeach