@extends('customer.master.master')

@section('judul1')
About
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata">
	<div class="tab">
		<button id="gmf" autofocus>GMF</button>
		<button id="gass">GASS</button>
		<button id="fac">Our Facility</button>
		<button id="manager">Our Management</button>
		<button id="testimoni">Testimoni</button>
	</div>
</div>
<div class="gass">
	<div class="col-md-12 rata">
		<img src="{{url('')}}/images/about/gass/{{$testi->about_gass_gambar}}" style="width: 100%; height:auto " class="img-responsive">
	</div>
	<div class="col-md-12 rata">
		<p class="paragraf">
			<?php print $testi->about_gass_text; ?>
		</p>
	</div>
</div>


<div class="gmf">
	<div class="col-md-12 rata">
		<img src="{{url('')}}/images/about/gmf/{{$testi->about_gmf_gambar}}" style="width: 100%; height:auto ">
		<iframe style="margin-top:10px;"width="100%" height="360" src="https://www.youtube.com/embed/0NtIgHkdm9E?ecver=1" frameborder="0" allowfullscreen> </iframe>
	</div>
	<div class="col-md-12 rata">
		<p class="paragraf">
			<?php print $testi->about_gmf_text; ?>
		</p>
	</div>
</div>
<div class="fac" style="display:none;">
	<div class="col-md-12 rata">
		<img src="{{url('')}}/images/about/facility/{{$testi->about_facility_gambar}}" style="width: 100%; height:auto " class="img-responsive">
	</div>
	<div class="col-md-12 rata">
		<p class="paragraf">
			<?php print $testi->about_facility_text; ?>
		</p>
	</div>
</div>
<div class="testimoni">
	<div class="col-md-12 rata" style="padding-top: 50px">
		<div class="col-md-4" style="text-align:center">
		<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('{{url('')}}/images/about/testi/{{$testi->about_testimony_g1}}'); background-size:cover"></div>
			<p class="paragraf"><strong>{{$testi->about_testimony_n1}}</strong> {{$testi->about_testimony_title1}}</p>
			<p class="paragraf">
				{{$testi->about_testimony_t1}}
			</p>
		</div>
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('{{url('')}}/images/about/testi/{{$testi->about_testimony_g2}}'); background-size:cover"></div>
			<p class="paragraf"><strong>{{$testi->about_testimony_n2}}</strong> {{$testi->about_testimony_title2}}</p>
			<p class="paragraf">
				{{$testi->about_testimony_t2}}
			</p>
		</div>
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('{{url('')}}/images/about/testi/{{$testi->about_testimony_g3}}'); background-size:cover"></div>
			<p class="paragraf"><strong>{{$testi->about_testimony_n3}}</strong> {{$testi->about_testimony_title3}}</p>
			<p class="paragraf">
				{{$testi->about_testimony_t3}}
			</p>
		</div>
	</div>
</div>

<div class="manager" style="display:none;">
	<div class="col-md-12 rata" style="padding-top: 50px">
		@foreach($manager as $data)
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('{{url('')}}/images/managers/{{$data->manager_filename}}'); background-size:cover"></div>
			<p class="paragraf"><strong>{{$data->manager_nama}}</strong></p>
			<p class="paragraf" style="margin-top:-10px"><strong>{{$data->manager_jabatan}}</strong></p>
			<p class="paragraf" style="margin-top:-10px">{{$data->manager_bio}}</p>

		</div>
		@endforeach
	</div>
</div>
<script>
	$("#gmf").click(function(){
		$(".gmf").show();
		$(".gass").hide();
		$(".testimoni").hide();
		$(".fac").hide();
		$(".manager").hide();
	});

	$("#gass").click(function(){
		$(".gass").show();
		$(".gmf").hide();
		$(".testimoni").hide();
		$(".fac").hide();
		$(".manager").hide();
	});

	$("#testimoni").click(function(){
		$(".testimoni").show();
		$(".gmf").hide();
		$(".gass").hide();
		$(".fac").hide();
		$(".manager").hide();
	});
	$("#fac").click(function(){
		$(".fac").show();
		$(".gmf").hide();
		$(".gass").hide();
		$(".testimoni").hide();
		$(".manager").hide();
	});
	$("#manager").click(function(){
		$(".fac").hide();
		$(".gmf").hide();
		$(".gass").hide();
		$(".testimoni").hide();
		$(".manager").show();
	});
</script>
@stop
