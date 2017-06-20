@extends('customer.master.master')

@section('judul1')
Product
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata" style="margin-top: 50px">
	<div class="col-md-7">
		<div class="col-md-12" style="padding-right: 60px; padding-bottom: 60px">
			<img src="{{url('')}}/images/product/{{$product->filename}}" style="width: 100%; height:auto " class="img-responsive">
		</div>
		<div class="col-md-12">
			<p class="judul-berita" style="font-size: 20px">Description</p>
			<p class="paragraf">{{$product->product_description}}</p>

			<p class="judul-berita" style="margin-top: 50px; font-size: 20px">Review</p>
			@isset($review[0])
			<div class="isiReview">
				@foreach($review as $data)
				<div style="width: 100%; border-bottom: solid 2px; border-bottom-color: #EAEAEA" class="paragraf">
					<p class="paragraf" style="font-size: 15px">{{$data->reviews_title}} (<strong style="font-size: 12px">{{$data->reviews_name}}</strong>)</p>
					<p class="paragraf"  style="font-size: 15px">{{$data->reviews_description}}</p>
				</div>
				@endforeach
			</div>
			@endisset
			<div class="kirimReview">
				<form method="post" action="{{url('')}}/products/send">
					<div class="form-group row">
						<div class="col-xs-6">
							<input class="form-control" name="nickname" type="text" placeholder="Nick Name">
						</div>
						<div class="col-xs-6">
							<input class="form-control" name="title" type="text" placeholder="Title Review">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-12">
							<textarea class="form-control" name="review" placeholder="Review"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-12">
							<input type="hidden" name="id" value="{{$product->product_id}}">
							{{ csrf_field() }}
							<input type="submit" class="btn btn-primary" value="Send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<p class="judul-berita">Technical Specification</p>
		<p class="paragraf">
			<?php print $product->product_specification; ?>
		</p>
	</div>
</div>
<script>
	// $("#description").click(function(){
	// 	$(".review").hide();
	// 	$(".description").show();
	// });

	// $("#review").click(function(){
	// 	$(".description").hide();
	// 	$(".review").show();
	// });
</script>
@stop
