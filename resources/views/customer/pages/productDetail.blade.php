@extends('customer.master.master')

@section('modal')
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Quotation</h4>
			</div>
			<div class="modal-body">
				<form id="formModal" method="post" action="{{url('')}}/quotation">
					<div class="form-group row">
						<div class="col-xs-12">
							<input class="form-control" id="email" name="email" type="text" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-12">
							<input class="form-control" id="telp" name="telp" type="text" placeholder="Telp" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-12">
						<textarea class="form-control" id="message" name="message" rows="5" required>Saya meminta quotation produk dengan dengan nama {{$product[0]->product_name}}</textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-12">
							{{ csrf_field() }}
							<input type="hidden" id="id" name="id" value="{{$product[0]->product_id}}">
							<input type="submit" class="btn btn-primary" id="kirim" value="Send">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
@stop

@section('judul1')
Product
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata" style="margin-top: 50px">
	<div class="col-md-7">
		<div class="col-md-12" style="padding-bottom: 30px">
			<div class="w3-content w3-section" style="width:100%; max-height:440px; text-align:center; margin-left:0 !important;">
				@foreach($product as $key=>$value)
				<img class="mySlides" src="{{url('')}}/images/product/{{$product[$key]->filename}}" style="max-height: 440px; max-width:100%; margin: 0 auto">
				@endforeach

				<button class="w3-display-left" style="margin-left: 20px; background:rgba(0,0,0,0.6); border-style: none; padding: 10px" onclick="plusDivs(-1)"><i class="fa fa-chevron-left" aria-hidden="true" style="color:white; font-size: 15px"></i></button>
				<button class="w3-display-right" style="margin-right: 20px; background:rgba(0,0,0,0.6); border-style: none; padding: 10px" onclick="plusDivs(1)"><i class="fa fa-chevron-right" aria-hidden="true" style="color:white; font-size: 15px"></i></button>
			</div>

			<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&mobile_iframe=true&width=87&height=28&appId" width="87" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

		</div>
		<div class="col-md-12">
			<p class="judul-berita" style="font-size: 20px">Description</p>
			<p class="paragraf">{{$product[0]->product_description}}</p>

			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-md" style="background-color:#3B5A9A; color: white" data-toggle="modal" data-target="#myModal">Quotation</button>
             <a href="{{url('')}}/products/print/{{$product[0]->product_id}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>

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
	<div class="col-md-5" style="margin-bottom: 100px">
		<p class="judul-berita">Technical Specification</p>
		<p class="paragraf">
			<?php print $product[0]->product_specification; ?>
		</p>


		<p class="judul-berita">Sugestion</p>
		@foreach($sugestion as $data)
		<a href="{{url('')}}/products/detail/{{$data->product_id}}">
			<div class="div2 rata-kiri" style="margin-bottom: 50px">
				<div class="col-md-5" style="padding-left:0">
					<img src="{{url('')}}/images/product/{{$data->filename}}" class="img-responsive">
				</div>
				<div class="col-md-7">
					<p class="paragraf"><strong>{{$data->product_name}}</strong></p>
					<p class="paragraf" style="margin-top: -17px">
						@if($data->product_tipe==1)
							Assembly and Fabrication
						@elseif($data->product_tipe==2)
							Services
						@elseif($data->product_tipe==3)
							Maintenance
						@elseif($data->product_tipe==4)
							Rental
						@endif
					</p>
				</div>
			</div>
		</a>
		@endforeach
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
