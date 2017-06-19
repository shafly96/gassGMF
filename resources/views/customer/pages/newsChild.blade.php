@extends('customer.master.master')

@section('judul1')
News
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata">
    <p class="judul-berita">{{$news->berita_title}}</p>
    <p class="tanggal">{{$news->berita_date}}</p>
	<img src="{{url('')}}/images/news/{{$news->berita_filename}}" style="width: 100%; height:auto " class="img-responsive">
</div>
<div class="col-md-12 rata">
	<p class="paragraf">
		<?php print $news->berita_text; ?>
	</p>
</div>
@stop
