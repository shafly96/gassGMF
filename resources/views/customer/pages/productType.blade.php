@foreach($product as $data)
	<div class="col-md-4">
		<div class=" outter-box">
			<div style="height: 150px; background: url('{{url('')}}/images/product/{{$data->filename}}'); background-size: cover;"></div>
			<p class="font-box">{{$data->product_name}}</p>
		</div>
	</div>
@endforeach
	{{ $product->links() }}