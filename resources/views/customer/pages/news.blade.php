@extends('customer.master.master')

@section('judul1')
News
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata" style="padding-top: 50px">

	@foreach($news as $data)
		<div class="div2" style="margin-bottom: 50px">
			<div class="col-md-5">
				<img src="{{url('')}}/images/news/{{$data->berita_filename}}" class="img-responsive">
			</div>
			<div class="col-md-7">
				<p class="judul-berita">{{$data->berita_title}}</p>
				<p class="tanggal">{{$data->berita_date}}</p>
				<p class="paragraf">
					<?php 
					if (strlen($data->berita_text) > 170) {
						$trimstring = substr($data->berita_text, 0, 270);
					} else {
						$trimstring = $data->berita_text;
					}
					echo $trimstring;
					?>
				</p>
				<p class="paragraf"><a href="{{url('')}}/news/detail/{{$data->berita_id}}">Read more ..</a></p>
			</div>
		</div>
	@endforeach
	{{ $news->links() }}

</div>
@stop
