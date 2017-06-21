@extends('customer.master.master')

@section('judul1')
Product
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata" style="margin-top: 50px">
	<div class="col-md-7">
		<div class="col-md-12" style="padding-left: 30px; padding-right: 30px; padding-bottom: 60px">
			<div class="w3-content w3-section" style="width:100%; height: 200px; text-align:center">
				@foreach($product as $key=>$value)
				<img class="mySlides" src="{{url('')}}/images/product/{{$product[$key]->filename}}" style="height: 100%; margin: 0 auto">
				@endforeach


				<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
				<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			</div>
		</div>
		<div class="col-md-12">
			<p class="judul-berita" style="font-size: 20px">Description</p>
			<p class="paragraf">{{$product[0]->product_description}}</p>

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
							<input type="hidden" name="id" value="{{$product[0]->product_id}}">
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
			<?php print $product[0]->product_specification; ?>
		</p>
	</div>
</div>
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			x[slideIndex-1].style.display = "block";  
		}
	</script>
	@stop
