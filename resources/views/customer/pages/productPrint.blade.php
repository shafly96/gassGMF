<!DOCTYPE html>
<html>
@include('customer/master/head')
<body onload="window.print();">
	<div class="col-md-12 rata" style="margin-top: 50px; padding: 20px">
		<p class="judul-berita" style="text-align:center; margin-bottom: 50px">{{$product[0]->product_name}}</p>

		<p class="judul-berita">Technical Specification</p>
		<p class="paragraf">
			<?php print $product[0]->product_specification; ?>
		</p>

		<p class="judul-berita">Description</p>
		<p class="paragraf">{{$product[0]->product_description}}</p>


		<p class="judul-berita" style="margin-top: 50px">Pictures</p>
		@foreach($product as $key=>$value)
		<img class="img-responsive" src="{{url('')}}/images/product/{{$product[$key]->filename}}" style="max-height: 440px; max-width:100%; margin-bottom: 50px">
		@endforeach
	</div>
</body>
</html>